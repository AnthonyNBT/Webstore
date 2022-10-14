<?php
    session_start();
    
    //Check Exist Name Attributes
    if (isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["remember"])) {
        //Check input

        $_SESSION["loginMailEmpty"] = "";
        $_SESSION["loginPassEmpty"] = "";

        if (empty($_POST["mail"])) {
            //
            //Mail is empty
            $_SESSION["loginMailEmpty"] = "Please enter your Email";
            header("Location: ../View/login.php");
            exit();
            //
        } else if (empty($_POST["password"])) {
            //
            //Password is empty
            $_SESSION["loginPassEmpty"] = "Please enter your Password";
            header("Location: ../View/login.php");
            exit();
            //
        } else {
            //Connect Database
            require_once "ConnectData.php";

            $Login_Mail = $_POST["mail"];
            $Login_Pass = $_POST["password"];

            $resultVali = QueryValidateSelect($Login_Mail);

            if ($resultVali->num_rows > 0) {
                //
                // Account Not Verify
                $_SESSION["DialogMess"] = array("title" => "Verify", "message" => "Account Not Verify");
                header("Location: ../View/login.php");
                exit();
                //
            } else {
                //Get User by Mail
                $result = QueryUserSelect($Login_Mail);
                $row = $result->fetch_assoc();

                if ($result->num_rows > 0 && password_verify($Login_Pass . $row["TOKEN"], $row["PASSWORD"])) {
                    //Create Session
                    $_SESSION["Logged"] = true;
                    $_SESSION["mail"] = $Login_Mail;
                    //Check Remember
                    if ($_POST["Remember"] = "Checked") {
                        if (!isset($_COOKIE["Mail"]) || $_COOKIE["Mail"] != $Login_Mail) {
                            setcookie("Mail", $Login_Mail, time() + (86400 * 30), "/");
                            setcookie("Password", $Login_Pass, time() + (86400 * 30), "/");
                        }
                    } else {
                        setcookie("Mail", "", time() + (86400), "/");
                        setcookie("Password", "", time() + (86400), "/");
                    }

                    //Direction Home After Login
                    header("Location: ../view/home.php");
                    exit();
                } else {
                    // Login User Wrong Password
                    setcookie("Mail", "", time() + (86400 * 30), "/");
                    setcookie("Password", "", time() + (86400 * 30), "/");
                    $_SESSION["DialogMess"] = array("title" => "Login Fail", "message" => "Wrong Email or Password");
                    header("Location: ../view/login.php");
                    exit();
                }
            }
        }
    } else {
        header("Location: ../view/Error.php");
    }