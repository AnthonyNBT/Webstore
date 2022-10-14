<?php
    session_start();

    if (isset($_GET["requestid"]) && !empty($_GET["requestid"])) {
        if (isset($_POST["password"]) && isset($_POST["password2"])) {
            if (empty($_POST["password"])) {
                //
                // Password empty
                $_SESSION["ResetPassEmpty"] = "Password is empty";
                header("Location: ../view/reset.php?requestid=" . $_GET["requestid"]);
                exit();
                //
            } else if (empty($_POST["password2"])) {
                //
                // Password2 empty
                $_SESSION["ResetPassEmpty"] = "Repeat Password is empty";
                header("Location: ../view/reset.php?requestid=" . $_GET["requestid"]);
                exit();
                //
            } else if (strlen($_POST["password"]) < 6 || strlen($_POST["password"]) > 36) {
                //
                // Password len from 6 to 36
                $_SESSION["ResetPassEmpty"] = "Length Password from 6 to 36 characters";
                header("Location: ../view/reset.php?requestid=" . $_GET["requestid"]);
                exit();
                //
            } else if ($_POST["password"] != $_POST["password2"]) {
                //
                //Password different Repeat Password
                $_SESSION["ResetPass2NotSame"] = "Repeat Password not same Password";
                header("Location: ../view/reset.php?requestid=" . $_GET["requestid"]);
                exit();
                //
            } else {
                $requestId = $_GET["requestid"];

                require_once "ConnectData.php";
                $result = QueryResetSelect($requestId);
                $row = $result->fetch_assoc();
                if (time() - $row["TIME_RESET"] <= 600) {
                    $mail = $row["EMAIL"];
                    $token = $row["TOKEN"];
                    $pass = $_POST["password"];
                    $newPass = password_hash($pass . $token, PASSWORD_DEFAULT);

                    QueryResetDelete($requestId);
                    QueryUserUpdatePass($newPass, $mail);

                } else {
                    QueryResetDelete($requestId);
                }
                $_SESSION["DialogMess"] = array("title" => "Reset Password", "message" => "Reset password sucess");
                header("Location: ../view/login.php");
                exit();
            }
        } else {
            header("Location: ../view/Error.php");
            exit();
        }
    } else {
        //
        // URL Wrong
        header("Location: ../view/Error.php");
        exit();
        //
    }