<?php

    if(isset($_GET['user_name']) && !empty($_GET['user_name'])){
        $user_name = $_GET['user_name'];

        if($user_name == "alex"){
            echo "You are the best.";
        }
    }
    // var_dump($user_name);

 ?>

<form class="" action="index.php" method="get">
    name : <input type="text" name="user_name">
    <p><input type="submit" value="submit"></p>
</form>
