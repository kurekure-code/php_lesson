<?php
    $directory = "files";

    if($handle = opendir($directory . "/")){
        echo "/" . $directory . "<br>";

        while($file = readdir($handle)){
            if($file != "." && $file !== ".."){
                echo '<a href="'. $directory . '/' . $file . '">' . $file . "<br>";
            }
        }
    }
?>