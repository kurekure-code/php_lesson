<?php
    $mysql_host = "localhost";
    $mysql_user = "root";
    $mysql_pass = "root";
    $mysql_db = "php_lesson_db";

    mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die("error connnect");

    mysqli_select_db($mysql_db) or die("error sql");





?>
