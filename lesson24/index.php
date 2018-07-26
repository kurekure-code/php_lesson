<?php

    $string = '<img src="sample.jpeg">';
    // $string_slashes = htmlentities($string);
    $string_slashes = htmlentities(addslashes($string));

    echo $string_slashes;

 ?>
