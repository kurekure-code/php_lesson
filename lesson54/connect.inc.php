<?php
    $sql_host = "localhost";
    $sql_user = "root";
    $sql_pass = "root";
    $con = list($sql_host, $sql_user, $sql_pass)
    $sql_db = "php_lesson_db";



    if(mysqli_connect($sql_host, $sql_user, $sql_pass) && mysqli_select_db($sql_db, $con)){
        echo "OK";
    }else{
        echo "NO";
    }
?>
