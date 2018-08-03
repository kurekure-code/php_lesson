<?php
    // $string = "password";
    // $string_hash = md5($string);

    if(isset($_POST["password"]) && !empty($_POST["password"])){
        $user_password = $_POST["password"];
        $userpass_hash = md5($user_password);
        echo $userpass_hash;
    }else{
        echo "please enter a password.";
    }



?>
<form class="" action="" method="post">
    password : <input type="text" name="password">
    <input type="submit" name="submit" value="submit">
</form>
