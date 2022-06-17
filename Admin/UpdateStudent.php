<?php 
$title = 'Update student';
include "header.php";
?>

<?php
require_once "../connection.php";
?>
<?php
if (!isset($_GET['student_id']) || !is_numeric($_GET['student_id'])) {
  header('location:Managestudent.php');
} else {
  $student_id = $_GET['student_id'];
}
?>
<?php
  if (isset($_POST['update'])) {
    $err = [];
    //form validation for name
    if (isset($_POST['name']) && !empty($_POST['name']))  {
      $name =  $_POST['name'];
    } else {
      $err['name'] = 'Enter your name';
    }
    //form validation for password
    if (isset($_POST['password']) && !empty($_POST['password']))  {
      $password =  $_POST['password'];
    } else {
      $err['password'] =  'Enter your password';
    }

    //form validation for email
    if (isset($_POST['email']) && !empty($_POST['email']))  {
      $email =  $_POST['email'];
    } else {
      $err['email'] =  'Enter your email';
    }

    //form validation for phone
    if (isset($_POST['phone']) && !empty($_POST['phone']))  {
      $phone =  $_POST['phone'];
    } else {
      $err['phone'] =  'Enter your phone number ';
    }


  //form validation for gender
  if (isset($_POST['gender']) && !empty($_POST['gender'])) {
      $gender =  $_POST['gender'];
    } else {
      $err['gender'] =  "Select your gender";
    }
   //form validation for class
    if (isset($_POST['class']) && !empty($_POST['class'])) {
      $class =  $_POST['class'];
    } else {
      $err['class'] = "Select your class";
    }
   //form validation for roll_no
    if (isset($_POST['roll_no']) && !empty($_POST['roll_no'])) {
      $roll_no =  $_POST['roll_no'];
    } else {
      $err['roll_no'] = "Select your roll_no";
    }

    if (count($err) == 0) {
    

      //sql to update data
      $sql ="update student set name='$name',email='$email',password='$password',phone='$phone',gender='$gender',class='$class',roll_no='$roll_no' where student_id=$student_id";
      //query execute
       $connect->query($sql);

       if ($connect->affected_rows ==1 ) {
          $success = "Profile update success";
       }else {
          $failed = "Profile update failed";

       }
    } 

  }


 ?>
 <?php
  if (isset($_POST['updateImage'])) {
    $erri = [];
      //form validation for photo
   if(isset($_FILES['image']['error']) && $_FILES['image']['error']==0){
    $types=['image/jpeg','image/png','image/gif'];
    if(in_array($_FILES['image']['type'], $types)){
      if($_FILES['image']['size']<=100*1024){
        $image_name=$_FILES['image']['name'];
        if(file_exists('../images/student/' .$_FILES['image']['name'])){
          $image_name=uniqid() . '_' . $_FILES['image']['name'];
        }
        //upload file
        if(move_uploaded_file($_FILES['image']['tmp_name'], '../images/student/' .$image_name)){
          /*echo "File upload success";
          echo $image_name;*/
          $image='http://localhost/exam/images/student/' . $image_name;
          //echo $image;

        }
        else{
          $erri['image']="File couldnot uploaded";
        }
      }
      else{
        $erri['image']="File size execeed";
      }
    }
    else{
      $erri['image']="Invalid file type";
    }
  }
  else{
    $erri['image']="Please choose file to upload";
  }
  if (count($erri) == 0) {
      //sql to update data
      $sql ="update student set photo='$image' where student_id=$student_id";
      //query execute
       $connect->query($sql);

       if ($connect->affected_rows ==1 ) {
          $Imagesuccess = "Profile update success";
       }else {
          $Imagefailed = "Profile update failed";

       }
    } 
  }
  ?>
<?php 


//query to select data from table categories
$sql = "select * from student where student_id=$student_id";

//execute query and get result object
$result = $connect->query($sql);


//fetch single data from result object
if ($result->num_rows == 0) {
  header('location:index.php');
} else {
  $student = $result->fetch_assoc();
}
//print_r($student);

 ?>


<div class="jumbotron" style="background-color: rgb(18, 38, 61);margin-top: 7rem;" >
   <div class="container">
    <div class="row">
    <div class="col-md-1"></div>
<!-- Update student -->  
    <div class="col-md-6"style="margin-left: 15vw;">
    <div class="card">
      <div class="card-header">
        <legend><a id="updatestudent">Student Information</a></legend>
        <hr>
        <div class="container">
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img src="<?php echo $student['photo'];?>" class="rounded-circle  outerbox w-100" alt="User">
        <a  href="#Modal" style="color:rgb(0,0,0);float: right;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
        </a>
      </div>
      <div class="col-md-4"></div>
      </div>
    </div>
      <hr>
       <?php if(isset($success)){ ?>
            <p class="alert alert-success"><?php echo $success; ?></p>
     <?php } ?>
   
   <?php if(isset($failed)){ ?>
            <p class="alert alert-danger"><?php echo $failed; ?></p>
     <?php } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?student_id=<?php echo $student_id ?>" enctype="multipart/form-data" >
            <fieldset>
              <legend><a id="profile">Personal Information</a></legend>
              <hr>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="username">Name</label>
                  <input type="text" class="form-control"  name="name" id="name" value="<?php echo $student['name'];?>"aria-describedby="helpId" placeholder="Enter your name">
                  value="<?php echo $student['name'];?>"
              </div>
              <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="text" class="form-control"  name="password" id="password" value="<?php echo $student['password'];?>"aria-describedby="helpId" placeholder="Enter your name">
                  <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
         <?php } ?>
              </div>
            </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>            
                  <input type="email" name="email" value="<?php echo $student['email'];?>" id="email" class="form-control"  placeholder="abc@gmail.com">
                  <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-6"> 
                  <label for="phone">Phone</label>            
                  <input type="number" name="phone" value="<?php echo $student['phone'];?>" id="phone" class="form-control"  placeholder="XXXXXXXXXX">
                  <?php if (isset($err['phone'])) { ?>
           <span class="text-danger"><?php echo $err['phone']; ?></span> 
         <?php } ?>  
                </div>   
                           
              </div>            


              <div class="form-row">
                 <div class="form-group col-md-6">
                <label>Gender </label><br/>
                <div class="form-check form-check-inline">
                <label><input class="form-check-input" name="gender" type="radio" value="male" <?php if($student['gender']=='male'){?>checked="checked"<?php }?> /> male</label>
                </div>
                <div class="form-check form-check-inline">
                <label><input class="form-check-input" name="gender" type="radio" value="female" <?php if($student['gender']=='female'){?>checked="checked"<?php }?> /> female</label>
                </div>

                <?php if (isset($err['gender'])) { ?>
           <span class="text-danger"><?php echo $err['gender']; ?></span> 
         <?php } ?> 
            </div>

            <div class="form-group col-md-6">
              <label  for="class">Class</label>   
              <select class="form-control" id="class" name="class">
                      <option value="<?php echo $student['class'] ?>"selected><?php echo $student['class'] ?></option>
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
              <div class="form-group">
                  <label for="roll_no">Roll Numer</label>
                  <input type="text" class="form-control"  name="roll_no" id="roll_no" value="<?php echo $student['roll_no'];?>"aria-describedby="helpId" placeholder="Enter your name">
                  <?php if (isset($err['roll_no'])) { ?>
           <span class="text-danger"><?php echo $err['roll_no']; ?></span> 
         <?php } ?>
              </div>

            </fieldset>
             <hr>           
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="Update Profile" name="update" id="Update Profile">
              <button class="smallwidth darktrans btn-dark btn  btn-outline-secondary p-3" type="button" onclick="parent.location='ManageStudent.php'">Display</button>
            </div>
            <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div>
</div>
<!-- Update student -->  
</div>
</div>
<!--Update Image-->

<div class="modal fade overflow-hidden" id="Modal" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <!--Content-->
    <div class="modal-content card">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="modal-title d-flex text-dark" id="myModalLabel">Change Photo</h3>
                </div>
                <div class="col-md-4">
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
        
          <!-- <div class="register-form"> -->
          <!-- form starts-->
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?student_id=<?php echo $student_id ?>" enctype="multipart/form-data">
            <div class="modal-body modalform text-dark">
              <?php if(isset($Imagesuccess)){ ?>
                <p class="alert alert-success"><?php echo $Imagesuccess; ?></p>
              <?php } ?>
             
              <?php if(isset($Imagefailed)){ ?>
                <p class="alert alert-danger"><?php echo $Imagefailed; ?></p>
              <?php } ?>
            <fieldset>
                <div class="form-group"> 
                  <label for="image">Photo:</label>
                  <div class="input-group mb-3 custom-file"> 
                      <input type="file" class="custom-file-input" id="image" name="image" class="form-control-file">
                      <label class="custom-file-label" for="image" aria-describedby="image"></label>
                   </div>
                 <?php if (isset($erri['image'])) { ?>
                <span class="text-danger"><?php echo $erri['image']; ?></span> 
                <?php } ?>
              </div>
            </fieldset>
          </div>
           <div class="modal-footer justify-content-center">
           <hr>           
             <hr>
            <div class="form-group" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="Update Profile Picture" name="updateImage" id="Update Profile Picture">
            </div>
            <small class="text-muted">
               <?php if(isset($erri['messsage'])) echo $erri['message']; ?>
             </small>
          </div>
        </form>


  <!--  </div> --><!--card ends -->
    
      </div>
    </div>
  </div>
</div>



<!--./Update Image
-->
    <?php require_once "footer.php"; ?>
