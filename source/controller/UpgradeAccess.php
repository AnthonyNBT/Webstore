<?php
    //Check
    session_start();

    if (isset($_POST["phone"]) && isset($_POST["fee"]) && (file_exists($_FILES['idCardFace']['tmp_name']) || is_uploaded_file($_FILES['idCardFace']['tmp_name'])) && (file_exists($_FILES['idCardBack']['tmp_name']) || is_uploaded_file($_FILES['idCardBack']['tmp_name']))) {
        // Check input

        $_SESSION["UpgradePhoneEmpty"] = "";
        $_SESSION["UpgradeFeeNotChoose"] = "";
        $_SESSION["NotEnoughMoney"] = "";
        $_SESSION["DeveloperTrue"] = "";

        if (empty($_POST["phone"])) {
            //
            // Phone is empty
            $_SESSION["UpgradePhoneEmpty"] = "Please enter your Phone Number";
            header("Location: ../view/upgrade.php");
            exit();
            //
        } else if ($_POST["fee"] == "notchoose") {
            //
            // Fee is not choose
            $_SESSION["UpgradeFeeNotChoose"] = "Fee upgrade account is 500.000VND. Please choose Fee";
            header("Location: ../view/upgrade.php");
            exit();
            //
        } else {
            // Connect Database
            require_once "ConnectData.php";

            $mail = $_SESSION["mail"];
            $Upgrade_Phone = $_POST["phone"];

            $result = QueryUserSelect($mail);
            $row = $result->fetch_assoc();

            // Path User Images Folder
            $Path_User = "../data/users/" . $row["TOKEN"] . "/images/";
            $Now_Cash = $row["CASH"];

            if ($row["DEVELOPER"] == 1) {
                $_SESSION["DeveloperTrue"] = "You was Developer.";
                header("Location: ../view/upgrade.php");
                exit();
            }
            else if ($Now_Cash < 500) {
                $_SESSION["NotEnoughMoney"] = "Your account not enough money to upgrade";
                header("Location: ../view/upgrade.php");
                exit();
            } else {
                // Type file Upload
                $type_Face = pathinfo($_FILES["idCardFace"]["name"], PATHINFO_EXTENSION);
                $type_Back = pathinfo($_FILES["idCardBack"]["name"], PATHINFO_EXTENSION);

                // Path Image Face Back
                $path_Face = $Path_User . "idCardFace." . $type_Face;
                $path_Back = $Path_User . "idCardFace." . $type_Back;

                // Save file
                move_uploaded_file($_FILES["idCardFace"]["tmp_name"], $Path_User . "idCardFace." . $type_Face);
                move_uploaded_file($_FILES["idCardBack"]["tmp_name"], $Path_User . "idCardBack." . $type_Back);

                // Update Developer in User database
                $Dev = 1;
                QueryUserUpdateRoleMoney($Now_Cash, $mail);

                // Update Developer Table Database
                QueryDeveloperInsert($mail, $Upgrade_Phone);
                $_SESSION["DialogMess"] = array("title" => "Upgrade", "message" => "Upgrade Role success");
                header("Location: ../view/info-upgrade.php");
                exit();
            }
        }
    } else {

    }
