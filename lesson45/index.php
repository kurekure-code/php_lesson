<?php
    if(isset($_POST["name"])){
        $naem = $_POST["name"];
        if(!empty($name)){
            $handle = fopen("name.txt", "a");
            fwrite($handle, $name."\n");
            fclose($handle);

            $readin = file("name.txt");
            foreach($readin as $fname){
                echo $fname . ",";
            }

        }else{
            echo "Please type a name";
        }
    }
?>