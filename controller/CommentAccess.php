<?php
    session_start();
    $comment = $_POST["commentD"];
    $rating = $_POST["ratingD"];
    $id = $_POST["idD"];
    $mail = $_POST["mailD"];
    include_once "ConnectData.php";
    $result = QueryUserSelect($mail);
    $row = $result->fetch_assoc();
    $name = $row["FULLNAME"];
    $comment_time = date('Y-m-d');
    QueryRatingInsert($id, $name, $rating);
    QueryCommentInsert($id, $name, $comment_time, $comment);
    $resultAjax = array($name, $comment_time, $comment);
    echo json_encode($resultAjax);