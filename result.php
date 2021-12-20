<?php
session_start();
include "connection.php";
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+ $_SESSION[exam_time] minutes"));

include "header.php";
?>
        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">

            <?php
                $correct=0;
                $wrong=0;

                if(isset($_SESSION["answer"])) //checking weather we have selected any answer or not
                {
                    for($i=1; $i<=sizeof($_SESSION["answer"]); $i++){
                        $answer="";
                        //load our exams answer and then we are going to compare with your given answer.
                        $res=mysqli_query($link, "select * from questions where category='$_SESSION[exam_category]' && question_no=$i");
                        while($row=mysqli_fetch_array($res)){
                            $answer=$row["answer"]; //this will load from our mysql table
                        }
                        if(isset($_SESSION["answer"][$i])) //answer of i, if user has selected any answer or not
                        {
                            if($answer==$_SESSION["answer"][$i]){ //table answer==user selected answer 
                                $correct=$correct+1;
                            }else{  //selected but wrong
                                $wrong=$wrong+1;
                            }
                        }
                        else{ //not selected 
                            $wrong=$wrong+1;
                        }
                    }
                }

                $count=0;
                $res=mysqli_query($link, "select * from questions where category='$_SESSION[exam_category]'");
                $count=mysqli_num_rows($res);
                $wrong=$count-$correct;
                echo "<br>"; echo "<br>";
                echo "<center>";
                echo "Total Questions= ".$count;
                echo "<br>";
                echo "Correct answer= ".$correct;
                echo "<br>";
                echo "Wrong answer= ".$wrong;
                echo "</center>";

            ?>
                
                
            </div>

        </div>

        <?php

        if(isset($_SESSION["exam_start"])){
            $date=date("Y-m-d");
            mysqli_query($link, "insert into exam_results(id, username, exam_type, total_question, correct_answer, wrong_answer, exam_time)values(NULL,'$_SESSION[username]','$_SESSION[exam_category]','$count','$correct','$wrong','$date')");

        }

        if(isset($_SESSION["exam_start"])){
            unset($_SESSION["exam_start"]); 
            ?>
            <scipt type="text/javascript">

                window.location.href=window.location.href;

            </script>
            <?php
        
        }
        ?>

<?php
include "footer.php";
?>



        