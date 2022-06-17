
<?php session_start(); 
if(!isset($_SESSION['faculty'])) {
  header('location:http://localhost/exam/header.php?msg=1');
  exit();
} 
else {
    $faculty_id = $_SESSION['faculty_id'];
  }?>

<?php
require_once "../connection.php";

      //get id from url: query string parameter
  if (isset($_POST['update'])) {
    $err = [];
    //form validation for name
    if (isset($_POST['name']) && !empty($_POST['name']))  {
      $name =  $_POST['name'];
    } else {
      $err['name'] = 'Enter your name';
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
  
    if (count($err) == 0) {

      //sql to update data
      $sql ="update faculty set name='$name',email='$email',phone='$phone',gender='$gender' where faculty_id=$faculty_id";
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
        if(file_exists('../images/faculty/' .$_FILES['image']['name'])){
          $image_name=uniqid() . '_' . $_FILES['image']['name'];
        }
        //upload file
        if(move_uploaded_file($_FILES['image']['tmp_name'], '../images/faculty/' .$image_name)){
          /*echo "File upload success";
          echo $image_name;*/
          $image='http://localhost/exam/images/faculty/' . $image_name;
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
      $sql ="update faculty set photo='$image' where faculty_id=$faculty_id";
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
$sql = "select * from faculty where faculty_id=$faculty_id";

//execute query and get result object
$result = $connect->query($sql);


//fetch single data from result object
if ($result->num_rows == 0) {
  header('location:index.php');
} else {
  $faculty = $result->fetch_assoc();
}
//print_r($faculty);

 ?>



  <?php
  if (isset($_POST['updatePassword'])) {
    $errp = [];
      //form validation for photo
    if (isset($_POST['password']) && !empty($_POST['password']))  {
      $password =  $_POST['password'];
    } else {
      $errp['password'] =  'Enter your password';
    }
    if (isset($_POST['newPassword']) && !empty($_POST['newPassword']))  {
      $newPassword =  $_POST['newPassword'];
    } else {
      $errp['newPassword'] =  'Enter your new password';
    }
     if (isset($_POST['confirmNewPassword']) && !empty($_POST['confirmNewPassword']))  {
      $confirmNewPassword =  $_POST['confirmNewPassword'];
    } else {
      $errp['confirmNewPassword'] =  'Enter your new password';
    }
    if($_POST['newPassword'] !== $_POST['confirmNewPassword']){
      $errp['newPassword'] =  'Password not match';
      $errp['confirmNewPassword'] =  'Password not match';
    }
    if($_POST['password'] !== $faculty['password']){
      $errp['password'] =  'Enter correct password';
    }
    if (count($errp) == 0) {
    
      //sql to update data
      $sql ="update faculty set password='$newPassword' where faculty_id=$faculty_id";
      //query execute
       $connect->query($sql);

       if ($connect->affected_rows ==1 ) {
          $Passsuccess = "Password update success";
       }else {
          $Passfailed = "Password update failed";

       }
    } 

  }
  ?>

  <?php 
$title = 'Dashboard';
require_once "header.php";
?>

  
<!-- About -->
 <div class="container-fluid ml-auto">
    <div class="row">
      <div class="col-md-8">
          <div class="exam_img"></div>
      </div>

      

      <div class="col-md-3 p-5">
         <div class="card  class='text-center'"style="margin-top:3rem;background-color: rgb(232, 255, 253,0.5);" >
      <div class="card-header"> 
        <h4 align="center" ><a id="about">Hello!</a><br></h4>
          <hr>
        <img src="<?php echo $faculty['photo'];?>" class="rounded-circle  outerbox w-100" alt="User">
        <a  href="#myModal" style="color:rgb(0,0,0);float: right;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
      </a>
      </div>
    </div> 
    <hr> 
    <div class="card" >
      <div class="card-header" align="left"style='background-color: rgb(232, 255, 253,0.5);padding-left: 4rem;'>
        <p class="text-dark">UserName: <?php echo $_SESSION['faculty_name'] ?><br></p>
        <p class="text-dark">(123) 456-7890</p>
        <p class="text-dark"><?php echo $_SESSION['faculty'] ?></p>
        <p class="text-dark">Class</p>
      </div>
    </div>
      </div>
      <div class="col-md-1">
      </div>
    </div> 
</div>
<!-- /About -->
<!--Update Image-->

<div class="modal fade overflow-hidden" id="myModal" role="dialog">
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
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?faculty_id=<?php echo $faculty_id ?>" enctype="multipart/form-data">
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
  

<!-- Update -->
    <div class="container"align="center">
      <img src="../images/sleep.jpg">
    </div>
  <div class="jumbotron" style="background-color: rgb(18, 38, 61)">
   <div class="containers">
    <div class="row">
    <div class="col-md-1"></div>

<!-- Update Profile-->

    <div class="col-md-6">
    <div class="card">
      <div class="card-header">
             <?php if(isset($success)){ ?>
            <p class="alert alert-success"><?php echo $success; ?></p>
     <?php } ?>
   
   <?php if(isset($failed)){ ?>
            <p class="alert alert-danger"><?php echo $failed; ?></p>
     <?php } ?>
        <img src="../images/lock.jpg" height="90rem" width="auto">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?faculty_id=<?php echo $faculty_id ?>" enctype="multipart/form-data" >
            <fieldset>
              <legend><a id="profile">Personal Information</a></legend>
              <hr>
              <div class="form-group">
                  <label for="username">Name</label>
                  <input type="text" class="form-control"  name="name" id="name" value="<?php echo $faculty['name'];?>"aria-describedby="helpId" placeholder="Enter your name">
                  <?php if (isset($err['name'])) { ?>
           <span class="text-danger"><?php echo $err['name']; ?></span> 
         <?php } ?>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>            
                  <input type="email" name="email" value="<?php echo $faculty['email'];?>" id="email" class="form-control"  placeholder="abc@gmail.com">
                  <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
         <?php } ?>
                </div>
                <div class="form-group col-md-6"> 
                  <label for="phone">Phone</label>            
                  <input type="number" name="phone" value="<?php echo $faculty['phone'];?>" id="phone" class="form-control"  placeholder="XXXXXXXXXX">
                  <?php if (isset($err['phone'])) { ?>
           <span class="text-danger"><?php echo $err['phone']; ?></span> 
         <?php } ?>  
                </div>   
                           
              </div>            


              <div class="form-row">
                 <div class="form-group col-md-12">
                <label>Gender </label><br/>
         <!-- <?php if ($faculty['gender'] == 'male') { ?>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="male" id="male" value="male" checked="">Male                  
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="female" id="female" value="female">Female                  
                </div>
         <?php } else { ?>
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="male" id="male" value="male">Male                  
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="female" id="female" value="female" checked="">Female                  
                </div>
      <?php } ?> -->
                <div class="form-check form-check-inline">
                <label><input class="form-check-input" name="gender" type="radio" value="male" <?php if($faculty['gender']=='male'){?>checked="checked"<?php }?> /> male</label>
                </div>
                <div class="form-check form-check-inline">
                <label><input class="form-check-input" name="gender" type="radio" value="female" <?php if($faculty['gender']=='female'){?>checked="checked"<?php }?> /> female</label>
                </div>

                <?php if (isset($err['gender'])) { ?>
           <span class="text-danger"><?php echo $err['gender']; ?></span> 
         <?php } ?> 
            </div>
              </div>
        <!--                     <div class="form-group"> 
                  <label for="image">Photo:</label>
                  <div class="input-group mb-3 custom-file"> 
                      <input type="file" class="custom-file-input" id="image" name="image" class="form-control-file">
                      <label class="custom-file-label" for="image" aria-describedby="image"></label>
                   </div>
                 <?php if (isset($err['image'])) { ?>
           <span class="text-danger"><?php echo $err['image']; ?></span> 
         <?php } ?>
              </div> -->
            </fieldset>
             <hr>           
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="Update Profile" name="update" id="Update Profile">
            </div>
            <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div> 
<!-- /.Update Profile-->


  <!-- Update Password -->
  <div class="col-md-4"style="margin-left: 2vw;">
    
    <div class="card" >
      <div class="card-header" >
        <?php if(isset($Passsuccess)){ ?>
                <p class="alert alert-success"><?php echo $Passsuccess; ?></p>
              <?php } ?>
             
              <?php if(isset($Passfailed)){ ?>
                <p class="alert alert-danger"><?php echo $Passfailed; ?></p>
              <?php } ?>
        <img src="../images/lock.jpg" height="90rem" width="auto">
         <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?faculty_id=<?php echo $faculty_id ?>">
            <fieldset>
              <legend> <a id="Password">Password</a></legend>
              <hr>
              <div class="form-group">
                  <label for="password">Old Password</label>
                  <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="********">
                  <?php if (isset($errp['password'])) { ?>
             <span class="text-danger"><?php echo $errp['password']; ?></span>
           <?php } ?>
              </div>
              <div class="form-group">
                  <label for="password">New Password</label>
                  <input type="password" class="form-control" name="newPassword" id="newPassword" aria-describedby="helpId" placeholder="********">
                  <?php if (isset($errp['newPassword'])) { ?>
             <span class="text-danger"><?php echo $errp['newPassword']; ?></span>
           <?php } ?>
              </div>
              <div class="form-group">
                  <label for="password">Re-enter New Password</label>
                  <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPassword" aria-describedby="helpId" placeholder="*******">
                  <?php if (isset($errp['confirmNewPassword'])) { ?>
             <span class="text-danger"><?php echo $errp['confirmNewPassword']; ?></span>
           <?php } ?>
              </div>
          </fieldset>
          <hr>
          <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="Update Password" name="updatePassword" id="Update Password">
            </div>
            <small class="text-muted">
               <?php if(isset($errp['messsage'])) echo $errp['message']; ?>
        </form>

      </div>
    </div>
  </div><!-- /.Update Password -->
</div>
   </div>
  </div>
<!-- /.Update -->
  

 
    <?php require_once "footer.php"; ?>