<?php
    session_start();
    if (isset($_POST["name"]) && isset($_POST["birth"]) && isset($_POST["gender"])) {
        $_SESSION["ProfileNameEmpty"] = "";
        $_SESSION["ProfileBirthEmpty"] = "";
        $_SESSION["ProfileGenderNotChoose"] = "";


        if (empty($_POST["name"])) {
            $_SESSION["ProfileNameEmpty"] = "Please enter your Name";
            header("Location: ../view/account.php");
            exit();
        } else if (empty($_POST["birth"])) {
            $_SESSION["ProfileBirthEmpty"] = "Please enter your Birthday";
            header("Location: ../view/account.php");
            exit();
        } else if ($_POST["gender"] == "notchoose") {
            $_SESSION["ProfileGenderNotChoose"] = "Please choose your gender";
            header("Location: ../view/account.php");
            exit();
        } else {
            $name = $_POST["name"];
            $mail = $_SESSION["mail"];
            $birth = $_POST["birth"];
            $gender = $_POST["gender"];

            include_once "ConnectData.php";
            QueryUserUpdateProfile($name, $birth, $gender, $mail);

            $_SESSION["DialogMess"] = array("title" => "Account", "message" => "Change Profile Access");
            header("Location: ../view/account.php");
            exit();
        }
    } else {
        header("Location: ../view/Error.php");
        exit();
    }


