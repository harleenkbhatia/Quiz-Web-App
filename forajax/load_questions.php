<?php
session_start();
include "../connection.php";

$question_no="";
$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";
$count=0;
$ans="";


$queno=$_GET["questionno"];


//when you select and move on and come to prev so to let the selected thing be there this command is being used. 
if(isset($_SESSION["answer"][$queno]))
{
    $ans = $_SESSION["answer"][$queno];

}

$res=mysqli_query($link, "select * from questions where category='$_SESSION[exam_category]' && question_no=$_GET[questionno]");
$count=mysqli_num_rows($res);

if($count==0){
    echo "over";
}
else{

    while($row=mysqli_fetch_array($res)){
        $question_no=$row["question_no"];
        $question=$row["question"];
        $opt1=$row["opt1"];
        $opt2=$row["opt2"];
        $opt3=$row["opt3"];
        $opt4=$row["opt4"];
    }
?>

<br>

<!-- for questions -->
<table>
    <tr>
        <td style="font-weight:bold; font-size:18px; padding-left: 5px" colspan="2">
            <?php echo $question_no.") ".$question; ?>

        </td>
    </tr>
</tabel>
<!-- for options -->
<table style="margin-left:25px; margin-top: 30px">
    <tr>
        <td>
            <input type="radio" name="r1" id="r1" value="<?php echo $opt1; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>)"
            <?php
                if($ans==$opt1){
                    echo "checked";
                }
            ?>>
        </td>
        <td style="padding-left: 10px">
            <?php 
                if(strpos($opt1, 'images/')!=false){
                    ?>
                    <img src="admin/<?php echo $opt1; ?>" style="margin-top:20px" height="50" width="50">
                    <?php
                }
                else{
                    echo $opt1;
                }
            ?>

        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="r1" id="r1" value="<?php echo $opt2; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>)"
            <?php
                if($ans==$opt2){
                    echo "checked";
                }
            ?>>
        </td>
        <td style="padding-left: 10px">
            <?php 
                if(strpos($opt2, 'images/')!=false){
                    ?>
                    <img src="admin/<?php echo $opt2; ?>" style="margin-top:20px" height="50" width="50">
                    <?php
                }
                else{
                    echo $opt2;
                }
            ?>

        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="r1" id="r1" value="<?php echo $opt3; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>)"
            <?php
                if($ans==$opt3){
                    echo "checked";
                }
            ?>>
        </td>
        <td style="padding-left: 10px">
            <?php 
                if(strpos($opt3, 'images/')!=false){
                    ?>
                    <img src="admin/<?php echo $opt3; ?>" style="margin-top:20px" height="50" width="50">
                    <?php
                }
                else{
                    echo $opt3;
                }
            ?>

        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="r1" id="r1" value="<?php echo $opt4; ?>" onclick="radioclick(this.value, <?php echo $question_no; ?>)"
            <?php
                if($ans==$opt4){
                    echo "checked";
                }
            ?>>
        </td>
        <td style="padding-left: 10px">
            <?php 
                if(strpos($opt4, 'images/')!=false){
                    ?>
                    <img src="admin/<?php echo $opt4; ?>"style="margin-top:20px" height="50" width="50">
                    <?php
                }
                else{
                    echo $opt4;
                }
            ?>

        </td>
    </tr>
</tabel>
<?php

}

?>