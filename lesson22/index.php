<?php

    $user_ip = $_SERVER["REMOTE_ADDR"];

    function echo_ip(){
        global $user_ip;
        $ip = "あなたのIPアドレスは" . $user_ip;
        echo $ip;
    }
    echo echo_ip();
 ?>
