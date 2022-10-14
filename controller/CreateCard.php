<?php
    session_start();

    if (isset($_POST["count"]) && isset($_POST["value"])) {
        $_SESSION["EmptyCount"] = "";
        if (empty($_POST["count"])) {
            $_SESSION["EmptyCount"] = "Please enter number card want to create";
            header("Location: ../view/admin-coin.php");
            exit();
        } else if ($_POST["count"] == 0) {
            $_SESSION["ChooseValue"] = "Please Choose Value";
            header("Location: ../view/admin-coin.php");
            exit();
        } else {
            require_once "ConnectData.php";
            $price = $_POST["value"]; // $_POST["price"]
            $Count_price = $_POST["count"]; //$_POST["Count-price"]
            for ($i = 0; $i < $Count_price; $i++) {
                $min = 1000000000000000;
                $max = 9999999999999999;
                $Seri = random_int($min, $max);
                QueryCardInsert($Seri, $price);
            }
            $_SESSION["DialogMess"] = array("title" => "Create Card", "message" => "Create Card Success");
            header("Location: ../view/admin-coin.php");
            exit();
        }
    } else {
        header("Location: ../view/Error.php");
        exit();
    }

