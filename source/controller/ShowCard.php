<?php
    include "ConnectData.php";
    $connectDB = ConnectDB();
    $query = "SELECT * FROM DBCARD";
    $stmt = $connectDB->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        for($i = 1; $i <= $result->num_rows; $i++) {
            $row = $result->fetch_assoc();
            if ($row["SELLED"] == 0) {
                $tit = "Chưa sử dụng";
            } else {
                $tit = "Đã sử dụng";
            }
            echo "<tbody>";
            echo "<tr>";
            echo "<th scope='row'>" . $i . "</th>";
            echo "<td>" . $row["PRICE"] . ".000 VND</td>";
            echo "<td>" . $row["SERI"] ."<td>";
            echo "<td>" . $tit . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }
    } else {
        ?>
        <tbody>
            <tr>
                <td colspan="4">Không có thẻ cào trong kho</td>
            </tr>
        </tbody>
        <?php
    }
