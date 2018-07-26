<?php
    $name = "sample";
    $age = 1;

    if(strtolower($name) === "sample"){
        echo "Yes sample" . "<br>";
        if($age >= 12){
            echo "You 12 over";
        }elseif($age <= 12){
            echo "You yang";
        }
        // if(1 === 1){
        //     echo "Yes 1";
        // }
    }else{
        echo "NO sample";
    }
 ?>
