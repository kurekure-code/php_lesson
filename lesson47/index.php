<?php
    $img_name = "image.jpg";
    $image = rand(1000, 9999).md5($img_name).rand(1000, 9999);
    echo $image;
?>