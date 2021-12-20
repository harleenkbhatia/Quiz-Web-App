<?php
session_start();
if(!isset($_SESSION["end_time"])){ //if exam is not start then we are going to display 00:00:00
    echo "00:00:00";

}
else{
$time1=gmdate("H:i:s",strtotime($_SESSION["end_time"])-strtotime(date("Y-m-d H:i:s")));
    if(strtotime($_SESSION["end_time"]) < strtotime(date("Y-m-d H:i:s"))) //endtime<currtime
    { 
        echo "00:00:00";
    }
    else{
        echo $time1;
    }
}
?>