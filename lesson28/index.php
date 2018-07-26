<?php
    // has_space
    function has_space($string){
        if(preg_match("/ /", $string)){
            return true;
        }else{
            return false;
        }
    }

    $string = "Thisdoesn\'thaveaspace";

    if(has_space($string)){
        echo "Has at least one spase.";
    }else{
        echo "has no spaces";
    }
 ?>
