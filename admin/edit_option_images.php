<?php
session_start();
include "header.php";
include "../connection.php";

if(!isset($_SESSION["admin"])){
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}

$id=$_GET["id"];
$id1=$_GET["id1"];

$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";


$res=mysqli_query($link, "select * from questions where id=$id");
while($row=mysqli_fetch_array($res)){
    $question=$row["question"];
    $opt1=$row["opt1"];
    $opt2=$row["opt2"];
    $opt3=$row["opt3"];
    $opt4=$row["opt4"];
    $answer=$row["answer"];

}
?>
<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Questions with Images</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                        <div class="col-lg-12">
                            <!-- enctype is for image -->
                        <form name="form1" action="" method="post" enctype="multipart/form-data"> 
                           
                           <div class="card">
                               <div class="card-header"><strong>Update Question with Image</strong></div>
                               <div class="card-body card-block">
                                   <div class="form-group"><label for="company" class=" form-control-label">Add the
                                           Question</label><input type="text"
                                           placeholder="Enter the new question here" class="form-control"
                                           name="fquestion" value="<?php echo $question; ?>">
                                   </div>
                                   <div class="form-group">
                                       <img src="<?php echo $opt1;?>" height="50" width="50"><br>
                                   <label for="company" class=" form-control-label">Add
                                           Option 1</label><input type="file" 
                                           class="form-control" name="fopt1" style="padding-bottom:38px">
                                   </div>
                                   <div class="form-group">
                                       <img src="<?php echo $opt2;?>" height="50" width="50"><br>
                                       <label for="company" class=" form-control-label">Add
                                           Option 2</label><input type="file" 
                                           class="form-control" name="fopt2" style="padding-bottom:38px">
                                   </div>
                                   <div class="form-group">
                                       <img src="<?php echo $opt3;?>" height="50" width="50"><br>
                                       <label for="company" class=" form-control-label">Add
                                           Option 3</label><input type="file" 
                                           class="form-control" name="fopt3" style="padding-bottom:38px">
                                   </div>
                                   <div class="form-group">
                                       <img src="<?php echo $opt4;?>" height="50" width="50"><br>
                                       <label for="company" class=" form-control-label">Add
                                           Option 4</label><input type="file" 
                                           class="form-control" name="fopt4" style="padding-bottom:38px">
                                   </div>
                                   <div class="form-group">
                                       <img src="<?php echo $answer;?>" height="50" width="50"><br>
                                       <label for="company" class=" form-control-label">Add the
                                           Answer</label><input type="file" 
                                           class="form-control" name="fanswer" style="padding-bottom:38px">
                                   </div>
                                   <div class="form-group">
                                       <input type="submit" name="submit2" value="Update Question"
                                           class="btn btn-success">
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
                                

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php

if(isset($_POST["submit2"])){
    $opt1=$_FILES["fopt1"]["name"];
    $opt2=$_FILES["fopt2"]["name"];
    $opt3=$_FILES["fopt3"]["name"];
    $opt4=$_FILES["fopt4"]["name"];
    $answer=$_FILES["fanswer"]["name"];

    $tm=md5(time());

    if($opt1!=""){

        $dst1="./opt_images/".$tm.$opt1; //uploading image
        $dst_db1="opt_images/".$tm.$opt1; //storing this path in our table
        move_uploaded_file($_FILES['fopt1']['tmp_name'], $dst1);

        mysqli_query($link,"update questions set question='$_POST[fquestion]', opt1='$dst_db1' where id=$id") or die(mysqli_error($link));

    }
    if($opt2!=""){

        $dst2="./opt_images/".$tm.$opt2; //uploading image
        $dst_db2="opt_images/".$tm.$opt2; //storing this path in our table
        move_uploaded_file($_FILES['fopt2']['tmp_name'], $dst2);

        mysqli_query($link,"update questions set question='$_POST[fquestion]', opt2='$dst_db2' where id=$id") or die(mysqli_error($link));

    }
    if($opt3!=""){

        $dst3="./opt_images/".$tm.$opt3; //uploading image
        $dst_db3="opt_images/".$tm.$opt3; //storing this path in our table
        move_uploaded_file($_FILES['fopt3']['tmp_name'], $dst3);

        mysqli_query($link,"update questions set question='$_POST[fquestion]', opt3='$dst_db3' where id=$id") or die(mysqli_error($link));

    }
    if($opt4!=""){

        $dst1="./opt_images/".$tm.$opt4; //uploading image
        $dst_db1="opt_images/".$tm.$opt4; //storing this path in our table
        move_uploaded_file($_FILES['fopt4']['tmp_name'], $dst4);

        mysqli_query($link,"update questions set question='$_POST[fquestion]', opt4='$dst_db4' where id=$id") or die(mysqli_error($link));

    }
    if($answer!=""){

        $dst5="./opt_images/".$tm.$answer; //uploading image
        $dst_db5="opt_images/".$tm.$answer; //storing this path in our table
        move_uploaded_file($_FILES["fanswer"]["tmp_name"], $dst5);

        mysqli_query($link,"update questions set question='$_POST[fquestion]', answer='$dst_db5' where id=$id") or die(mysqli_error($link));
    }
    mysqli_query($link,"update questions set question='$_POST[fquestion]' where id=$id") or die(mysqli_error($link));
    
    ?>

    <script type="text/javascript">
        window.location="add_edit_questions.php?id=<?php echo $id1; ?>";

    </script>
    <?php
    
}

?>

<?php

include "footer.php";

?>