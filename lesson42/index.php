<?php
    session_start();

    if(isset($_SESSION['username'])){
        echo "Hi " . $_SESSION["username"] . "<br>";
        if($_SESSION["age"] > 20){
            echo $_SESSION["age"] . " " . "OK" . "<br>";
            echo '<a href="unset.php">logout</a>';
        }else{
            echo "NG";
        }
    }else{
        echo "log in";
        echo '<a href="set.php">set</a>';
    }
?>