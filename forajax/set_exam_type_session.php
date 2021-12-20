<?php
session_start();
include "../connection.php";

$exam_category = $_GET["exam_category"];
$_SESSION["exam_category"]=$exam_category;
$res=mysqli_query($link, "select * from exam_category where category = '$exam_category'") or die(mysqli_error($link));
while($row=mysqli_fetch_array($res)){
    $_SESSION["exam_time"]=$row["exam_time_in_minutes"];
}
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+$_SESSION[exam_time] minutes")); //we are going to add our end time to our current time
$_SESSION["exam_start"]="yes";//indicates that our exam is going to start


?>