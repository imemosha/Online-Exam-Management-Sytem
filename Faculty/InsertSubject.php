<?php 
      require_once'../connection.php';
      //get id from url: query string parameter
?>

<?php session_start(); 
if(!isset($_SESSION['faculty'])) {
  header('location:http://localhost/exam/header.php?msg=1');
} 
else {
    $faculty_id = $_SESSION['faculty_id'];
  }?>

  <?php
  if (isset($_POST['insertSubject'])) {
    $errs = [];
      //form validation for photo
    //form validation for subject
  if (isset($_POST['subject']) && !empty($_POST['subject'])) {
      $subject =  $_POST['subject'];
    } else {
      $errs['subject'] =  "Select your subject";
    }
    if (isset($_POST['class']) && !empty($_POST['class'])) {
      $class =  $_POST['class'];
    } else {
      $errs['class'] =  "Select your class";
    }
    if (count($errs) == 0) {
    

      //sql to update data
      $sql = "INSERT INTO subject (faculty_id, class, subject) VALUES ('$faculty_id', '$class', '$subject')";
      //query execute
       $connect->query($sql);
      if($connect->affected_rows ==1 && $connect->insert_id > 0){
      $success = "Subject insert success";
      }
      else{
        $failed="Subject insert failed";
      }
     
      } else {
        $err['msgS'] =  "failed";
      }
  }
  ?>


  <?php 
$title = 'Subject Insert';
include "header.php";
?>


<div class="jumbotron h-100" style="background-color: rgb(18, 38, 61);margin-top: 2rem;" >
   <div class="container h-100">
    <div class="row h-100">
    <div class="col-md-1"></div>
    <div class="col-md-6"style="margin-left: 15vw;">
    <div class="card">
      <div class="card-header">
<!-- Update Profile-->
             <?php if(isset($success)){ ?>
            <p class="alert alert-success"><?php echo $success; ?></p>
     <?php } ?>
   
   <?php if(isset($failed)){ ?>
            <p class="alert alert-danger"><?php echo $failed; ?></p>
     <?php } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <fieldset>
              <legend><a id="profile">Personal Information</a></legend>
              <hr>
              <div class="form-row">
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
                <?php if (isset($errs['class'])) { ?>
                <span class="text-danger"><?php echo $errs['class']; ?></span> 
                <?php } ?>
              </div>
                <div class="form-group col-md-6">
               <label  for="subject">subject</label>   
                <select class="form-control" name= "subject" id="subject">
                      <option selected>Select subject...</option>
                      <option value="Math">Math</option>
                      <option value="Science">Science</option>
                      <option value="Social">Social</option>
                      <option value="English">English</option>
                      <option value="OPT">OPT</option>
                      <option value="Nepali">Nepali</option>
                      <option value="Computer">Computer</option>
                      <option value="Environment">Environment</option>
                </select>
                <?php if (isset($errs['subject'])) { ?>
                <span class="text-danger"><?php echo $errs['subject']; ?></span> 
                <?php } ?>
              </div>                
              </div> 
              </fieldset>
              <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit"  name="insertSubject"class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="Insert">
              <button class="smallwidth darktrans btn-dark btn  btn-outline-secondary p-3" type="button" onclick="parent.location='subject.php'">Display</button>
            </div>
             <small class="text-muted">
               <?php if(isset($err['msgS'])) echo $err['msgS']; ?>
             </small>
              </form>
      </div>
  </div>
</div>
</div>
</div>

    <?php require_once "footer.php"; ?>
