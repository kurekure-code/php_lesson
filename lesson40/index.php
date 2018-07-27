<?php
    if(isset($_POST["pass"]) && !empty($_POST["pass"])){
        $password = $_POST["pass"];
    }
    var_dump($password);
?>
<form class="" action="index.php" method="post">
    Pass <input type="password" name="pass" value="">
</form>
