<?php
    require_once "ConnectData.php";

    $mail = $_SESSION["mail"];
    $result = QueryCardSellSelect($mail);

    if ($result->num_rows > 0) {
        for ($i = 1; $i <= $result->num_rows; $i++) {
            $row = $result->fetch_assoc();
            echo "<tr>";
            echo "<th scope='row'>" . $i . "</th>";
            echo "<td>" . $row["SERI"] . "</td>";
            echo "<td>" . $row["DATEUSED"] . "</td>";
            echo "<td>" . $row["PRICE"] . ".000 VND</td>";
            echo "</tr>";
        }

    } else {
        echo "<tr>";
        echo "<td colspan='4'>Không có thông tin giao dịch</td>";
        echo "</tr>";
    }