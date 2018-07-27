<?php
    $redirect_page = "http://google.co.jp";
    $redirect = true;

    if($redirect === true){
        header("Location: " . $redirect_page);
    }
?>
