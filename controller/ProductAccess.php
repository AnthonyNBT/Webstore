<?php
    require_once "ConnectData.php";
    $id = $_GET["id"];
    // Query Product
    $result = QueryOneProductSelect($id);
    $row = $result->fetch_assoc();
    $rate = QueryRatingAverage($id);
    $down = QueryOneProductSelect($id)->fetch_assoc()["DOWNLOAD_TIMES"];
    $resultHis = QueryHistoryBuyDownSelect($id, $_SESSION["mail"]);
    $numRowHis = $resultHis->num_rows;