<?php 
$title = 'Notice';
include "header.php";

if (isset($_POST['Post'])) {
    $err = [];
    //form validation for notice
    if (isset($_POST['notice']) && !empty($_POST['notice']))  {
      $notice =  $_POST['notice'];
    } else {
      $err['notice'] = 'Enter your notice';
    }

    //form validation for subject
    if (isset($_POST['subject']) && !empty($_POST['subject']))  {
      $subject =  $_POST['subject'];
    } else {
      $err['subject'] =  'Enter your subject';
    }

    //form validation for date
    if (isset($_POST['date']) && !empty($_POST['date']))  {
      $date =  $_POST['date'];
    } else {
      $err['date'] =  'Enter the date';
    }

    //form validation for class
    if (isset($_POST['class']) && !empty($_POST['class']))  {
      $class =  $_POST['class'];
    } else {
      $err['class'] =  'Enter your class';
    }

    //form validation for duration
    if (isset($_POST['duration']) && !empty($_POST['duration']))  {
      $duration =  $_POST['duration'];
    } else {
      $err['duration'] =  'Enter the duration';
    } 

          //form validation for term
    if (isset($_POST['term']) && !empty($_POST['term']))  {
      $term =  $_POST['term'];
    } else {
      $err['term'] =  'Enter the term';
    } 
   if (count($err) == 0) {
      require_once '../connection.php';
      //print_r($connect);
        //redirect to next page
        //header("location:index.php");
      //sql to insert data
      $insert = "INSERT INTO student_notice(notice, subject, class, date, term) VALUES ('$notice', '$subject', '$class', '$date', '$term')";
      //Query execution
      $run_insert = mysqli_query($connect, $insert);
      if($run_insert === true){
      $Ssuccess = "Notice has been added.";
      }
      else{
        $Sfailed="Failed, Try Again.";
      }
     
      } else {
        $err['message'] =  "Failed.";
      }
}
?>

<!-- Notice -->
<div class="container" style="margin-top: 7rem;">
	<h4>Notice</h4>
		<hr>
<div class="row">
<!-- Student  Notice -->
<div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <?php if(isset($Ssuccess)){ ?>
            <p class="alert alert-success"><?php echo $Ssuccess; ?></p>
     <?php } ?>
   
     <?php if(isset($Sfailed)){ ?>
            <p class="alert alert-danger"><?php echo $Sfailed; ?></p>
     <?php } ?>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
              <legend><a id="notice">Student Notice</a></legend>
              <div class="form-group">
                  <textarea type="text" class="form-control" name="notice" id="notice" aria-describedby="helpId" rows="4" cols="50" placeholder="Write today's notice here.."></textarea>
                   <?php if (isset($err['notice'])) { ?>
           <span class="text-danger"><?php echo $err['notice']; ?></span> 
         <?php } ?>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" aria-describedby="helpId" placeholder="Enter the subject">
                   <?php if (isset($err['subject'])) { ?>
           <span class="text-danger"><?php echo $err['subject']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-6">
              <label  for="class">Class</label>   
              <select class="form-control" name="class" id="class">
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
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="date">Date</label>            
                  <input type="date" name="date" id="date" class="form-control"  placeholder="mm-dd-yyyy">
                   <?php if (isset($err['date'])) { ?>
           <span class="text-danger"><?php echo $err['date']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="duration">Duration</label>            
                  <input type="time" name="duration" id="duration" class="form-control"  placeholder="Enter the duration">
                   <?php if (isset($err['duration'])) { ?>
           <span class="text-danger"><?php echo $err['duration']; ?></span> 
         <?php } ?>
                </div>
            </div>
            <div class="form-group">
                  <label for="term">term</label>            
                  <input type="text" name="term" id="term" class="form-control"  placeholder="Enter the term">
                   <?php if (isset($err['term'])) { ?>
           <span class="text-danger"><?php echo $err['term']; ?></span> 
         <?php } ?>
                </div>
            </fieldset>
             <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61) "value="POST" name="Post" id="Post">
            </div>
             <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div> 

<!-- /Student  Notice -->
<?php
if (isset($_POST['POST'])) {
    $err = [];
    //form validation for notice
    if (isset($_POST['notice']) && !empty($_POST['notice']))  {
      $notice =  $_POST['notice'];
    } else {
      $err['notice'] = 'Enter your notice';
    }

    //form validation for subject
    if (isset($_POST['subject']) && !empty($_POST['subject']))  {
      $subject =  $_POST['subject'];
    } else {
      $err['subject'] =  'Enter your subject';
    }

    //form validation for class
    if (isset($_POST['class']) && !empty($_POST['class']))  {
      $class =  $_POST['class'];
    } else {
      $err['class'] =  'Enter your class';
    }

    //form validation for date
    if (isset($_POST['date']) && !empty($_POST['date']))  {
      $date =  $_POST['date'];
    } else {
      $err['date'] =  'Enter the date';
    }

      //form validation for duration
    if (isset($_POST['duration']) && !empty($_POST['duration']))  {
      $duration =  $_POST['duration'];
    } else {
      $err['duration'] =  'Enter the duration';
    } 

     //form validation for term
    if (isset($_POST['term']) && !empty($_POST['term']))  {
      $term =  $_POST['term'];
    } else {
      $err['term'] =  'Enter the term';
    } 
     if (count($err) == 0) {
      require_once '../connection.php';
      //print_r($connect);
        //redirect to next page
        //header("location:index.php");
        //SQL insert query
        $insert = "INSERT INTO faculty_notice(notice, subject, class, due_date, duration) VALUES ('$notice', '$subject', '$class','$date', '$duration')";
      //Query execution
      $run_insert = mysqli_query($connect, $insert);
      if($run_insert === true){
      $success = "Notice has been added.";
      }
      else{
        $failed="Failed, Try Again.";
      }
     
      } else {
        $err['msg'] =  "Failed.";
      }
}
  ?>

<!-- Faculty  Notice -->
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <?php if(isset($success)){ ?>
            <p class="alert alert-success"><?php echo $success; ?></p>
     <?php } ?>
   
     <?php if(isset($failed)){ ?>
            <p class="alert alert-danger"><?php echo $failed; ?></p>
     <?php } ?>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
              <legend>Faculty Notice</legend>
              <div class="form-group">
                  <textarea type="text" class="form-control" name="notice" id="notice" aria-describedby="helpId" rows="4" cols="50" placeholder="Write notice (related to question preparation)here.."></textarea>
                   <?php if (isset($err['notice'])) { ?>
           <span class="text-danger"><?php echo $err['notice']; ?></span> 
         <?php } ?>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" aria-describedby="helpId" placeholder="Enter the subject">
                   <?php if (isset($err['subject'])) { ?>
           <span class="text-danger"><?php echo $err['subject']; ?></span> 
         <?php } ?>
              </div> 
              <div class="form-group col-md-6">
               <label  for="class">Class</label>   
              <select class="form-control" name= "class" id="class">
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
            </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="date">Due Date</label>            
                  <input type="date" name="date" id="date" class="form-control"  placeholder="mm-dd-yyyy">
                   <?php if (isset($err['date'])) { ?>
           <span class="text-danger"><?php echo $err['date']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="duration">Duration</label>            
                  <input type="time" name="duration" id="duration" class="form-control"  placeholder="Enter the duration">
                   <?php if (isset($err['duration'])) { ?>
           <span class="text-danger"><?php echo $err['duration']; ?></span> 
         <?php } ?>
                </div>
              </div>
              <div class="form-group">
                  <label for="term">term</label>            
                  <input type="text" name="term" id="term" class="form-control"  placeholder="Enter the term">
                   <?php if (isset($err['term'])) { ?>
                    <span class="text-danger"><?php echo $err['term']; ?></span> 
                  <?php } ?>
                </div>
            </fieldset>
             <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)"value="POST" name="POST" id="POST">
            </div>
            <small class="text-muted">
               <?php if(isset($err['msg'])) echo $err['msg']; ?>
             </small>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div> 
</div>
</div>
<!-- Student  Notice -->
<!-- /Notice -->
 <br><br>
  <?php require_once "footer.php"; ?>