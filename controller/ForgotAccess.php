<?php
    session_start();
    if (isset($_POST["mail"])) {
        $mail = $_POST["mail"];
        $_SESSION["WrongEmail"] = "";
        require_once "ConnectData.php";
        $result = QueryUserSelect($mail);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $time = time();
            $requestid = md5($time);

            QueryResetInsert($requestid, $row["EMAIL"], $row["TOKEN"], $time);
            require "SendMailVerify.php";
            SendMailResetPass($mail, $requestid);
            $_SESSION["DialogMess"] = array("title" => "Reset password", "message" => "Please check email to reset password");
            header("Location: ../view/forgot.php");
        } else {
            $_SESSION["WrongEmail"] = "Not Exist Email";
            header("Location: ../view/forgot.php");
            exit();
        }
    } else {
        header("Location: ../view/Error.php");
        exit();
    }