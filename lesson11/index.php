<?php
    $text = "sample ";
    $text = trim($text);
    var_dump($text);

    if($text === ""){
        echo "空";
    }elseif($text === "sample"){
        echo "sample";
    }else{
        echo "?";
    }
 ?>
