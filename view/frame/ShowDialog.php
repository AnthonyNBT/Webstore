<?php
    if (isset($_SESSION["DialogMess"])) {
        echo "<script>$('#Message').modal({show: true})</script>";
    }
    unset($_SESSION["DialogMess"]);
    exit();
