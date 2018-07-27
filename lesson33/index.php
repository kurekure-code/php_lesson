<?php
    $find = array("alex", "billy", "dale");
    $replace = array("a**x", "b***y", "d**e");

    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = $_POST["name"];
        $name_new = str_replace($find, $replace, $name);
        echo $name_new;
    }
 ?>
<hr>
<form class="" action="index.php" method="post">
    <textarea name="name" rows="8" cols="80"><?php $name;?></textarea>
    <input type="submit" name="submit" value="submit">
</form>
