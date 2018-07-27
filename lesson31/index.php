<?php

    $offset = 0;

    $find = "and";
    $find_length = strlen($find);

    $string = "This is a string, and it is an example.";

    while($string_position = strpos($string, $find, $offset)){
        echo $find . " found at " . $string_position . "<br>";
        $offset = $string_posi44tion + $find_length;
    }

 ?>
