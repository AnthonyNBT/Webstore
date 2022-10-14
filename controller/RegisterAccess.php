<?php
    session_start();
    //Check Exist Name Atribute
    if (isset($_POST["fullname"]) && isset($_POST["birthday"]) &&
        isset($_POST["gender"]) && isset($_POST["mail"]) &&
        isset($_POST["password"]) && isset($_POST["password2"])) {
        //Check input

        $_SESSION["RegisNameEmpty"] = "";
        $_SESSION["RegisBirthEmpty"] = "";
        $_SESSION["RegisGenderEmpty"] = "";
        $_SESSION["RegisMailEmpty"] = "";
        $_SESSION["RegisPassEmpty"] = "";
        $_SESSION["RegisPass2Empty"] = "";
        $_SESSION["RegisLengthPass"] = "";
        $_SESSION["RegisPass2NotSame"] = "";
        $_SESSION["RegisMailExist"] = "";

        if (empty($_POST["fullname"])) {
            //
            //Name is empty
            $_SESSION["RegisNameEmpty"] = "Please enter your Name";
            header("Location: ../View/register.php");
            exit();
            //
        } else if (empty($_POST["birthday"])) {
            //
            //Birth is empty
            $_SESSION["RegisBirthEmpty"] = "Please enter your Birthday";
            header("Location: ../View/register.php");
            exit();
            //
        } else if ($_POST["gender"] == "notchoose") {
            //
            //Gender is Not choose
            $_SESSION["RegisGenderEmpty"] = "Please choose your Gender";
            header("Location: ../View/register.php");
            exit();
            //
        } else if (empty($_POST["mail"])) {
            //
            //Mail is empty
            $_SESSION["RegisMailEmpty"] = "Please enter your Mail";
            header("Location: ../View/register.php");
            exit();
            //
        } else if (empty($_POST["password"])) {
            //
            //Password is empty
            $_SESSION["RegisPassEmpty"] = "Please enter your Password";
            header("Location: ../View/register.php");
            exit();
            //
        } else if (empty($_POST["password2"])) {
            //
            //Repeat Password is empty
            $_SESSION["RegisPass2Empty"] = "Please enter your Repeat Password";
            header("Location: ../View/register.php");
            exit();
            //
        } else if (strlen($_POST["password"]) < 6 || strlen($_POST["password"]) > 36) {
            //
            //Password length from 6 to 36
            $_SESSION["RegisLengthPass"] = "Length Password from 6 to 36 characters";
            header("Location: ../View/register.php");
            exit();
            //
        } else if ($_POST["password"] != $_POST["password2"]) {
            //
            //Password different Repeat Password
            $_SESSION["RegisPass2NotSame"] = "Repeat Password not same Password";
            header("Location: ../View/register.php");
            exit();
            //
        } else {
            //Connect Database
            require_once "ConnectData.php";

            $Regis_Name = $_POST["fullname"];
            $Regis_Birth = $_POST["birthday"];
            $Regis_Gender = $_POST["gender"];
            $Regis_Mail = $_POST["mail"];
            $Regis_Pass = $_POST["password"];
            $Regis_Pass2 = $_POST["password2"];

            //Get User by Mail
            $resultMail = QueryUserSelect($Regis_Mail);

            //Check User
            if ($resultMail->num_rows == 0) {
                // Check User in Validate
                $resultMailVa = QueryValidateSelect($Regis_Mail);

                if ($resultMailVa->num_rows > 0) {
                    //
                    // User Exist in Validation
                    $_SESSION["RegisMailExist"] = "Mail Exist";
                    header("Location: ../View/register.php");
                    exit();
                    //
                } else {
                    //Information input true
                    //Create Token in microsecond
                    $Token = md5(round(microtime(true) * 1000));
                    //Hash Password with Token
                    $HashPassword = password_hash($Regis_Pass . $Token, PASSWORD_DEFAULT);
                    $Time_Regis = time();
                    $Regis_Request_ID = md5($Time_Regis);
                        //Insert Into Validate Database
                    QueryValidateInsert($Regis_Request_ID, $Regis_Name, $Regis_Birth, $Regis_Gender, $Regis_Mail, $HashPassword, $Token, $Time_Regis);
                    //Send Mail Verify
                    require "SendMailVerify.php";
                    SendMailVerify($Regis_Mail, $Regis_Request_ID);

                    //Direction
                    $_SESSION["DialogMess"] = array("title" => "Verify", "message" => "Please check Mail to Verify Account");
                    header("Location: ../View/login.php");
                    exit();
                }
            } else {
                //
                // User Exist in User
                $_SESSION["RegisMailExist"] = "Mail Exist";
                header("Location: ../View/register.php");
                exit();
                //
            }
        }
    } else {
        header("Location: ../view/Error.php");
        exit();
    }