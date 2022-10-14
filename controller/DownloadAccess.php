<?php
    session_start();
    if (!isset($_SESSION["Logged"]) || $_SESSION["Logged"] == false) {
        header("Location: ../view/login.php");
        exit();
    }
    include "ConnectData.php";

    if(isset($_POST['download'])){
        $dl = $_POST['download'];
        $filedir = trim(__DIR__, "controller");
        $filePath =  $filedir . 'data/products/' . $dl . '/source/' . $dl . '.zip';

        if(!file_exists($filePath)){
            die('File not Exist');
        }
        $mail = $_SESSION["mail"];
        $result = QueryHistoryBuyDownSelect($dl, $mail);
        if ($result->num_rows == 0) {
            QueryHistoryBuyDownInsert($dl, $mail, 0);
        }

        QueryProductUpdateDownload($dl);
        // #1 Download dialog
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-type: application/octet-stream");
        header('Content-Disposition: attachment; filename="'.basename($filePath).'"');
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: ".filesize($filePath));
        flush();
        @readfile($filePath);
        die();
     } else {
         header("Location: ../view/Error.php");
         exit();
     }

