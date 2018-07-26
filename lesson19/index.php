<?php
    // $text = "12223";
    $text = "122 23";
    $text = trim($text);

    if(preg_match("/22/", $text)){
        echo "ok";
    }else{
        echo "NG";
    }
 ?>
