<?php
    session_start();

    //Check Exist Name Attributes
    if (isset($_POST["seri"])) {
        $_SESSION["CardSelled"] = "";
        $_SESSION["WrongSeri"] = "";
        $_SESSION["SeriEmpty"] = "";

        if (!empty($_POST["seri"])) {
            // Connect Database
            require_once "ConnectData.php";

            $mail = $_SESSION["mail"];
            $seri = $_POST["seri"];

            //Get Card by Seri Code
            $result = QueryCardSelect($seri);
            $row_Seri = $result->fetch_assoc();

            if ($result->num_rows > 0) {
                if ($row_Seri["SELLED"] == 0) {
                    //Get User by Mail
                    $result = QueryUserSelect($mail);
                    $row = $result->fetch_assoc();
                    $cash = $row["CASH"] + $row_Seri["PRICE"];

                    // Update Money
                    QueryUserUpdateMoney($cash, $mail);

                    // Add history Sell With Email
                    QueryCardSellInsert($mail, $seri, $row_Seri["PRICE"]);

                    // Update Selled Seri Code
                    QueryCardUpdateSelled($seri);

                    header("Location: ../view/coin.php");
                    exit();
                } else {
                    //
                    // Seri Selled
                    $_SESSION["CardSelled"] = "Card was used";
                    header("Location: ../view/coin.php");
                    exit();
                    //
                }

            } else {
                //
                // Wrong Seri Code
                $_SESSION["WrongSeri"] = "Wrong Seri";
                header("Location: ../view/coin.php");
                exit();
                //
            }
        } else {
            //
            // empty seri code
            $_SESSION["SeriEmpty"] = "Seri Empty";
            header("Location: ../view/coin.php");
            exit();
            //
        }
    } else {
        header("Location: ../view/Error.php");
        exit();
    }