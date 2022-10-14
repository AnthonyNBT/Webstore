<?php
    $token = "testFolder";
    $path_User = "../images/user/";
    if (!is_dir($path_User . $token)) {
        mkdir($path_User . $token);
    } else {
        echo "False";
    }