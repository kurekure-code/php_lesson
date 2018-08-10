<?php
    $M_host = "localhost";
    $M_user = "root";
    $M_pass = "root";
    $M_db = "php_lesson_db";

    if(!mysqli_connect($M_host, $M_root, $M_pass) || !mysqli_select_db($M_db)){
        die("erro");
    }
?>
