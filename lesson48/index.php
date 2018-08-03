<?php
    $name = $_FILES["file"]["name"];

    $tmp_name = $_FILES["file"]["tmp_name"];

    if(isset($name)){
        if(!empty($name)){
            echo "OK";

            $location = "uploads/";

            if(move_uploaded_file($tmp_name, $location . $name)){
                echo "uplodaed!";
            }
        }else{
            echo "Please choose a file.";
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <p><input type="file" name="file"></p>
    <p><input type="submit" value="submit"></p>
</form>
