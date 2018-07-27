<?php
    require "conf.inc.php";

    foreach($ip_blocked as $ip){
        if($ip == $ip_address){
            die("ip block". $ip . "<br>");
        }
    }
?>
<h1>Hi php</h1>
