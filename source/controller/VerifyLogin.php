<?php
    session_start();
    if (isset($_GET["requestid"]) && !empty($_GET["requestid"])) {
        $requestID = $_GET["requestid"];
        require_once "ConnectData.php";
        $result = QueryValidateSelectRequestId($requestID);
        $row = $result->fetch_assoc();

        if ($result->num_rows > 0) {
            if (time() - $row["TIME_REGISTER"] <= 600) {

                // Insert into User Database
                QueryUserInsert($row["FULLNAME"], $row["BIRTH"], $row["GENDER"], $row["EMAIL"], $row["PASSWORD"], $row["TOKEN"]);

                // Delete Validation User After Validation
                QueryValidationDetele($row["REQUESTID"]);

                // Create Folder for User
                $token = $row["TOKEN"];
                mkdir("../data/users/" . $token);
                mkdir("../data/users/" . $token . "/images");
                $_SESSION["DialogMess"] = array("title" => "Verify", "message" => "Verify Success");
            } else {
                // Delete Validation User After Validation
                QueryValidationDetele($row["REQUESTID"]);
                $_SESSION["DialogMess"] = array("title" => "Verify", "message" => "Over Time Verify");
            }
            // Direction Login.php
            header("Location: ../view/login.php");
            exit();
        } else {
            //
            // Wrong Verify
            $_SESSION["DialogMess"] = array("title" => "Verify", "message" => "You only verify one time Or Your account already verify");
            header("Location: ../view/login.php");
            exit();
            //
        }
    } else {
        header("Location: ../view/Error.php");
        exit();
    }