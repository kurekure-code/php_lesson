<?php
    if(isset($_POST["contact_name"]) && isset($_POST["contact_email"]) && isset($_POST["contact_text"])){
        $contact_name = $_POST["contact_name"];
        $contact_email = $_POST["contact_email"];
        $contact_text = $_POST["contact_text"];

        if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){
            echo $to = "hoge@gmail.com";
            echo $subject = "Contact hi";
            echo $body = $contact_name. "\n" . $contact_text;
            echo $headers = "Form" . $contact_email;
        }else{
            echo "NG";
        }
    }
?>
<form class="" action="" method="post">
    name : <input type="text" name="contact_name"><br>
    email <input type="text" name="contact_email"><br>
    Message
    <textarea name="contact_text" row="6"></textarea>
    <input type="submit" name="submit" value="submit">
</form>
