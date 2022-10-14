<?php
    session_start();
    include "ConnectData.php";
    $name = $_SESSION["name"];
    $developName = $_SESSION["name"];
    $mail = $_SESSION["mail"];
    $type = $_POST["type"];
    $price = $_POST["fee"];
    $describe = $_POST["shortdes"];
    $upload_date = date("Y-m-d");
    $accept_date = date("Y-m-d");

    if (in_array($type, array("game", "tool"))) {
        $class = "application";
    } else if (in_array($type, array("action", "cartoon", "comedy"))) {
        $class = "film";
    } else {
        $class = "book";
    }

    $data = array("game"=>"GA", "tool"=>"TO", "action"=>"AC", "cartoon"=>"CA", "comedy"=>"CF", "ebook"=>"EB", "audio"=>"AU", "child"=>"CH");
    $id = $data[$type].time();

    QueryProductInsert($id, $name, $developName, $mail, $class, $type, $price, $describe, $upload_date, $accept_date);

    mkdir("../data/products/" . $id);
    mkdir("../data/products/" . $id . "/image");
    mkdir("../data/products/" . $id . "/source");

    header("Location: ../view/Dev-up.php");
    exit();