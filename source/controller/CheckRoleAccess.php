<?php
    if (isset($_SESSION["mail"]) && isset($_SESSION["Logged"]) && $_SESSION["Logged"] == true) {
        $result = QueryUserSelect($_SESSION["mail"]);
        $role = $result->fetch_assoc()["DEVELOPER"];
        if ($role == 0) {
            include "../view/frame/header.php";
        }
        if ($role == 1) {
            include "../view/frame/dev-header.php";
        }
        if ($role == 2){
            include  "../view/frame/admin-header.php";
        }
    } else {
        include  "../view/frame/header-account.php";
    }