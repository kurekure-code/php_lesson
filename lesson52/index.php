<?php

    require "connect.inc.php";

    $query = "SELECT * FROM food ORDER BY id";

    // echo "<pre>";
    // var_dump($con);
    // echo "</pre>";

    if($query_run = mysqli_query($query,$con)){
        echo "Ouery succsess";
    }else{
        echo "erro";
    }
?>
