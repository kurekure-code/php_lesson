<?php
    if(isset($_GET["day"]) && isset($_GET["date"]) && isset($_GET["year"])){
        $day = $_GET["day"];
        $date = $_GET["date"];
        $year = $_GET["year"];
        if(!empty($day) && !empty($date) && !empty($year)){
            echo "OK" . $day . $date . $year;
        }else{
            echo "NG";
        }
    }
?>
<form class="" action="" method="get">
    day : <input type="text" name="day" value="">
    date : <input type="text" name="date" value="">
    year: <input type="text" name="year" value="">
    <input type="submit" name="submit" value="submit">
</form>
