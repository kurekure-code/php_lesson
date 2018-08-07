<?php
    $mysqli_host = "localhost";
    $mysqli_user = "root";
    $mysqli_pass = "root";
    $mysqli_db = "php_lesson_db";

    // $connect = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass) or die("erro db");
    // mysqli_select_db($connect, $mysqli_db) or die("erro select");

    if(!mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass) && !mysqli_select_db($connect, $mysqli_db)){
        echo "erro select or db";
    }else{
        $con = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass);
    }
?>
