<?php 
require_once "../CheckloginAdmin.php"; 
$title = "Subject Insert";
require_once "header.php"; ?>

<?php 
      require_once'../connection.php';
      //get id from url: query string parameter

//query to select data from table categories
$sql = "select * from faculty";

//execute query and get result object
$result = $connect->query($sql);

// mysqli_result Object ( [current_field] => 0 [field_count] => 8 [lengths] => [num_rows] => 2 [type] => 0 )

$data = [];

//fetch single data from result object
// $a = $result->fetch_assoc();
// print_r($a);

while ($a = $result->fetch_assoc()) {
  array_push($data, $a);
}
  
  ?>
  <?php
  if (isset($_POST['insertSubject'])) {
    $errs = [];
      //form validation for photo
    //form validation for subject
      if (isset($_POST['name']) && !empty($_POST['name'])) {
      $name =  $_POST['name'];
    } else {
      $errs['name'] =  "Select your name";
    }
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
      $sql = "INSERT INTO subject (faculty_id, class, subject) VALUES ('$name', '$class', '$subject')";
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


<div class="jumbotron h-100" style="background-color: rgb(18, 38, 61);margin-top: 3rem;" >
   <div class="container h-100">
    <div class="row h-100">
    <div class="col-md-1"></div>
    <div class="col-md-6"style="margin-left: 15vw;margin-top: 4rem;">
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
               <div class="form-group">
               <label  for="class">Faculty Name</label>   
                <select class="form-control" name= "name" id="name">
                      <option selected>Select Name...</option>
                      <?php foreach($data as $index => $d){ ?>
                      <option value="<?php echo $d['faculty_id'] ?>"><?php echo $d['name'] ?></option>
                      <?php } ?>
                </select>
                <?php if (isset($errs['name'])) { ?>
                <span class="text-danger"><?php echo $errs['name']; ?></span> 
                <?php } ?>
              </div>
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
              <button class="smallwidth darktrans btn-dark btn  btn-outline-secondary p-3" type="button" onclick="parent.location='subject.php'">Display Subjects</button>
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
