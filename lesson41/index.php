<?php
    session_start();
    $_SESSION["name"] = "Ben";
    $user = $_SESSION['name'];

    if(isset($_SESSION["name"])){
        echo "Hi " . $user;
    }
?>