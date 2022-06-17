<?php
if (isset($_POST['Set'])) {
    $err = [];
    //form validation for class
    if (isset($_POST['class']) && !empty($_POST['class']))  {
      $name =  $_POST['class'];
    } else {
      $err['class'] = 'Enter your class';
    }

     //form validation for subject
    if (isset($_POST['subject']) && !empty($_POST['subject']))  {
      $rank =  $_POST['subject'];
    } else {
      $err['subject'] =  'Enter your subject';
    }


    //form validation for full marks
    if (isset($_POST['Full_Marks']) && !empty($_POST['Full_Marks']))  {
      $rank =  $_POST['Full_Marks'];
    } else {
      $err['Full_Marks'] =  'Enter the Full Marks';
    }

     //form validation for Pass marks
    if (isset($_POST['Pass_Marks']) && !empty($_POST['Pass_Marks']))  {
      $rank =  $_POST['Pass_Marks'];
    } else {
      $err['Pass_Marks'] =  'Enter the Pass Marks';
    }

    //form validation for no of qun
    if (isset($_POST['No_Of_Qun']) && !empty($_POST['No_Of_Qun']))  {
      $rank =  $_POST['No_Of_Qun'];
    } else {
      $err['No_Of_Qun'] =  'Enter the number of questions';
    }

     //form validation for duration
    if (isset($_POST['duration']) && !empty($_POST['duration']))  {
      $rank =  $_POST['duration'];
    } else {
      $err['duration'] =  'Enter the duration';
    }

    //form validation for term
    if (isset($_POST['term']) && !empty($_POST['term']))  {
      $rank =  $_POST['term'];
    } else {
      $err['term'] =  'Enter the Term';
    }

     //form validation for obtained marks
    if (isset($_POST['Obtained_Marks']) && !empty($_POST['Obtained_Marks']))  {
      $rank =  $_POST['Obtained_Marks'];
    } else {
      $err['Obtained_Marks'] =  'Enter the Obtained Marks';
    }

    // question
     if (isset($_POST['desc']) && !empty($_POST['desc']))  {
      $rank =  $_POST['desc'];
    } else {
      $err['desc'] =  'Enter the question';
    }

     // options
     if (isset($_POST['option1.1']) && !empty($_POST['option1.1']))  {
      $rank =  $_POST['option1.1'];
    } else {
      $err['option1.1'] =  'Enter the option';
    }

    if (isset($_POST['option1.2']) && !empty($_POST['option1.2']))  {
      $rank =  $_POST['option1.2'];
    } else {
      $err['option1.2'] =  'Enter the option';
    }

    if (isset($_POST['option1.3']) && !empty($_POST['option1.3']))  {
      $rank =  $_POST['option1.3'];
    } else {
      $err['option1.3'] =  'Enter the option';
    }

    if (isset($_POST['option1.4']) && !empty($_POST['option1.4']))  {
      $rank =  $_POST['option1.4'];
    } else {
      $err['option1.4'] =  'Enter the option';
    }
  }
?>

<?php
//connection to database
require_once '../connection.php';

if(isset($_POST['Set'])){

   $class = $_POST ['class'];
   $Subject = $_POST ['Subject'];
   $Option1 = $_POST['Option1'];
   $Option2 = $_POST['Option2'];
   $Option3 = $_POST['Option3'];
   $Option4 = $_POST['Option4'];
   $Full_Marks = $_POST ['Full_Marks'];
   $Pass_Marks = $_POST ['Pass_Marks'];
   $Desc = $_POST ['Desc'];
   $No_Of_Qun = $_POST ['No_Of_Qun'];
   $Duration = $_POST ['Duration'];
   $Obtained_Marks = $_POST ['Obtained_Marks'];
   $term = $_POST ['term'];
   
//SQL insert query
  $insert = "INSERT INTO question_paper(question, choice1, choice2, choice3, choice4,  full_marks, pass_marks, correct_answer, term  ,subject, class, duration, no_of_qun) VALUES ('$Desc', '$Option1', '$Option2', '$Option3', '$Option4', '$Full_Marks', '$Pass_Marks', '$Obtained_Marks', '$term' ,'$Subject' , '$class', '$Duration', '$No_Of_Qun')";

  //Query execution
    $run_insert = mysqli_query($connect, $insert);
    if($run_insert === true){
      echo "Question has been set.";
    }else{
      echo "Failed, Try Again.";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Question</title>
  <link rel="stylesheet" type="text/css" href="../css/color.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/Student.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<!-- Exam -->
<div class="jumbotron" style="background-color: rgb(255,255,255)">
   <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>

      <div class="col-md-8">
        <form method="post" enctype="multipart/form-data">
        <div class="card outerbox" style="background-color:rgb(247, 237, 255,0.5);">
          <div class="card-header">
            <fieldset>
              <legend>Details:</legend>
              <hr>
               <div class="form-row">
                <div class="form-group col-md-4">
                <label  for="Class">Class</label>   
                <select class="form-control inner"  name= "class" id="class">
                    <option selected>Select Class...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                </select>
                <?php if (isset($err['class'])) { ?>
           <span class="text-danger"><?php echo $err['class']; ?></span> 
         <?php } ?>
                </div>

                  <div class="form-group col-md-2"> </div>
                <div class="form-group col-md-4"> 
                  <label for="Subject">Subject</label>            
                  <select class="form-control inner"  name ="Subject" id="Subject">
                      <option selected>Select Subject...</option>
                      <option value="Math">Math</option>
                      <option value="Science">Science</option>
                      <option value="English">English</option>
                      <option value="Nepali">Nepali</option>
                   </select>
                   <?php if (isset($err['subject'])) { ?>
           <span class="text-danger"><?php echo $err['subject']; ?></span> 
         <?php } ?>
                </div>                
              </div> 

               <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="Full_Marks">Full Marks</label>            
                  <input type="Full_Marks" name="Full_Marks" id="Full_Marks" class="form-control inner"  placeholder="abc@gmail.com">
                  <?php if (isset($err['Full_Marks'])) { ?>
           <span class="text-danger"><?php echo $err['Full_Marks']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-2"> 
                  <label for="Pass_Marks">Pass Marks</label>            
                  <input type="Pass_Marks" name="Pass_Marks" id="Pass_Marks" class="form-control inner"  placeholder="">
                  <?php if (isset($err['Pass_Marks'])) { ?>
           <span class="text-danger"><?php echo $err['Pass_Marks']; ?></span> 
         <?php } ?>
                </div>                
              </div>  
  

               <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="No_Of_Qun">Number of Question</label>            
                  <input type="No_Of_Qun" name="No_Of_Qun" id="No_Of_Qun" class="form-control inner"  placeholder="">
                  <?php if (isset($err['No_Of_Qun'])) { ?>
           <span class="text-danger"><?php echo $err['No_Of_Qun']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4"> 
                  <label for="Duration">Duration</label>            
                  <input type="Duration" name="Duration" id="Duration" class="form-control inner"  placeholder="">
                  <?php if (isset($err['duration'])) { ?>
           <span class="text-danger"><?php echo $err['duration']; ?></span> 
         <?php } ?>
                </div>                
              </div> 

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="term">Term</label>  
                  <select class="form-control inner"  name= "term" id="term">
                    <option selected>Select Term...</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                </select>          
                  <?php if (isset($err['term'])) { ?>
           <span class="text-danger"><?php echo $err['term']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4"> 
                  <label for="Obtained_Marks">Obtained Marks</label>            
                  <input type="Obtained Marks" name="Obtained_Marks" id="Obtained_Marks" class="form-control inner"  placeholder="">
                  <?php if (isset($err['Obtained_Marks'])) { ?>
           <span class="text-danger"><?php echo $err['Obtained_Marks']; ?></span> 
         <?php } ?>
                </div>                
              </div>   
            </fieldset>
            <fieldset>
              <legend>Questions:</legend>
              <hr>
              <table class="table table-light table-bordered table-hover inner">
                <tr>
                  <th class="tablepurple">
                  <div class="form-group">
                    <label for="Message">1. Question</label>
                    <textarea class="form-control" rows="3" name="Desc" id="Desc" aria-describedby="helpId" placeholder="Enter question"></textarea>
                    <?php if (isset($err['desc'])) { ?>
           <span class="text-danger"><?php echo $err['desc']; ?></span> 
         <?php } ?>
                    </div>
                  </th>
            </tr>
            <tr>
              <td>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Option1.1">Option1</label>            
                  <input type="Option1.1" name="Option1" id="Option1" class="form-control"  placeholder="Option1">
                  <?php if (isset($err['option1.1'])) { ?>
           <span class="text-danger"><?php echo $err['option1.1']; ?></span> 
         <?php } ?>
                
              </div>
                <div class="form-group col-md-6">
                <label for="Option1.2">Option2</label>            
                  <input type="Option1.2" name="Option2" id="Option2" class="form-control"  placeholder="Option2">
                  <?php if (isset($err['option1.2'])) { ?>
           <span class="text-danger"><?php echo $err['option1.2']; ?></span> 
         <?php } ?>
              </div>
            </div>
             </td>
          </tr>
          <tr>
            <td>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Option1.3">Option3</label>            
                  <input type="Option1.3" name="Option3" id="Option3" class="form-control"  placeholder="Option3">
                  <?php if (isset($err['option1.3'])) { ?>
           <span class="text-danger"><?php echo $err['option1.3']; ?></span> 
         <?php } ?>
              </div>
                <div class="form-group col-md-6">
                <label for="Option1.4">Option4</label>            
                  <input type="Option1.4" name="Option4" id="Option4" class="form-control"  placeholder="Option4">
                  <?php if (isset($err['option1.4'])) { ?>
           <span class="text-danger"><?php echo $err['option1.4']; ?></span> 
         <?php } ?>
              </div>
            </div>
          </td>
          </tr>
            </fieldset>
     </table>

        <br/>
         <hr>
          <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="btn btn-outline-white btn-outline text-dark inner" style="background-color:rgb(247, 237, 230,0.5);"value="Set" name="Set" id="Set Question">
            </div>
            <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
        </form>
   
      </div>
    </div>
  </form>
      </div>
    </div>
   </div>
  </div>
  <!-- /.Exam -->

</body>