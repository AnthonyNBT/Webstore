<?php
    session_start();
    //Check Exist Name Atribute
    if (isset($_POST["OldPass"]) && isset($_POST["NewPass"]) && isset($_POST["NewPass2"])) {
        $_SESSION["OldPassEmpty"] = "";
        $_SESSION["NewPassEmpty"] = "";
        $_SESSION["LenNewPass"] = "";
        $_SESSION["NewPassRepeatEmpty"] = "";
        $_SESSION["WrongPassOld"] = "";
        $_SESSION["NotSamePass"] = "";

        if (empty($_POST["OldPass"])) {
            //
            // Empty Old Password
            $_SESSION["OldPassEmpty"] = "Please enter Old Password";
            header("Location: ../view/account.php");
            exit();
            //
        } else if (empty($_POST["NewPass"])) {
            //
            // Empty New Password
            $_SESSION["NewPassEmpty"] = "Please enter New Password";
            header("Location: ../view/account.php");
            exit();
            //
        } else if (strlen($_POST["NewPass"]) < 6 || strlen($_POST["NewPass"]) > 36) {
            //
            // Password length from 6 to 36
            $_SESSION["LenNewPass"] = "Length Password from 6 to 36 characters";
            header("Location: ../view/account.php");
            exit();
            //
        } else if (empty($_POST["NewPass2"])) {
            //
            // Empty New Password Repeat
            $_SESSION["NewPassRepeatEmpty"] = "Please enter New Password repeat";
            header("Location: ../view/account.php");
            exit();
            //
        } else if ($_POST["NewPass"] != $_POST["NewPass2"]) {
            //
            // Empty Not Same Pass
            $_SESSION["NotSamePass"] = "New Password repeat not same password";
            header("Location: ../view/account.php");
            exit();
            //
        } else {
            // Connect Database
            require_once "ConnectData.php";
            
            $Reset_Mail = $_SESSION["mail"];
            $Reset_Old = $_POST["OldPass"];
            $Reset_New = $_POST["NewPass"];
            // echo $Reset_Mail;

            //Get User by Mail
            $resultMail = QueryUserSelect($Reset_Mail);
            $row = $resultMail->fetch_assoc();

            if ($resultMail->num_rows > 0 && password_verify($Reset_Old . $row["TOKEN"], $row["PASSWORD"])) {
                $HashPassword = password_hash($Reset_New . $row["TOKEN"], PASSWORD_DEFAULT);

                QueryUserUpdatePass($HashPassword, $Reset_Mail);

                //Direction Home Page After Change Pass
                $_SESSION["DialogMess"] = array("title" => "ChangePass", "message" => "Change password success");
                header("Location: ../view/account.php");
                exit();
            } else {
                // Wrong Old Password
                $_SESSION["WrongPassOld"] = "Wrong Old Password";
                header("Location: ../view/account.php");
                exit();
            }
        }
        
    } else {
        header("Location: ../view/Error.php");
        exit();
    }