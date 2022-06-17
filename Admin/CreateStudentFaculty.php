<?php 
$title = 'Create Account';
require_once "header.php";

if (isset($_POST['StudentName'])) {
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

    //form validation for password
    if (isset($_POST['password']) && !empty($_POST['password']))  {
      $password =  $_POST['password'];
    } else {
      $err['password'] =  'Enter your password';
    }

    //form validation for roll no
    if (isset($_POST['roll_no']) && !empty($_POST['roll_no']))  {
      $roll_no =  $_POST['roll_no'];
    } else {
      $err['roll_no'] =  'Enter your roll no.';
    }


    //form validation for phone
    if (isset($_POST['phone']) && !empty($_POST['phone']))  {
      $phone =  $_POST['phone'];
    } else {
      $err['phone'] =  'Enter your phone number ';
    }

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
          $image='http://localhost:1080/exam/images/student/' . $image_name;
          //echo $image;

        }
        else{
          $err['image']="File couldnot uploaded";
        }
      }
      else{
        $err['image']="File size execeed";
      }
    }
    else{
      $err['image']="Invalid file type";
    }
  }
  else{
    $err['image']="Please choose file to upload";
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
   if (count($err) == 0) {
      require_once '../connection.php';
      //print_r($connect);
        //redirect to next page
        //header("location:index.php");
      //sql to insert data
      $sql = "INSERT INTO student (name, phone, email, password, roll_no, photo, gender, class) VALUES ('$name', '$phone', '$email', '$password', '$roll_no','$image','$gender', '$class')";
      $connect->query($sql);
      if($connect->affected_rows ==1 && $connect->insert_id > 0){
      $Ssuccess = "Student Data insert success";
      }
      else{
        $Sfailed="Student Data insert failed";
      }
     
      } else {
        $err['message'] =  "failed";
      }
  }
  ?>

    <div class="container" align="center">
      <img src="../images/sleep.jpg">
    </div>
  <div class="jumbotron" style="background-color: rgb(18, 38, 61)" >
    <?php echo $title; ?>
   <div class="containers">
    <div class="row">
    <div class="col-md-1">
    </div>

<!-- Add Student -->
    <div class="col-md-6"style="margin-left: 15vw;">
    <div class="card">
      <div class="card-header">
         <?php if(isset($Ssuccess)){ ?>
            <p class="alert alert-success"><?php echo $Ssuccess; ?></p>
     <?php } ?>
   
     <?php if(isset($Sfailed)){ ?>
            <p class="alert alert-danger"><?php echo $Sfailed; ?></p>
     <?php } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <fieldset>
              <legend><a id="addStudent">Student Information</a></legend>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="username">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter your name">
                  <?php if (isset($err['name'])) { ?>
           <span class="text-danger"><?php echo $err['name']; ?></span> 
         <?php } ?>
              </div>
               
                <div class="form-group col-md-6 "> 
                  <label for="phone">Phone</label>            
                  <input type="phone" name="phone" id="phone" class="form-control"  placeholder="XXXXXXXXXX">
                  <?php if (isset($err['phone'])) { ?>
           <span class="text-danger"><?php echo $err['phone']; ?></span> 
         <?php } ?>
                </div> 
              </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>            
                  <input type="email" name="email" id="email" class="form-control"  placeholder="abc@gmail.com">
                  <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
          <?php } ?>
                </div>  

                <div class="form-group col-md-6">
                  <label for="password">Password</label>            
                  <input type="password" name="password" id="password" class="form-control" >
                  <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
         <?php } ?>
                </div>                
              </div> 
             
                <div class="form-group">
                  <label for="roll_no">Roll no.</label>            
                  <input type="roll_no" name="roll_no" id="roll_no" class="form-control" >
                  <?php if (isset($err['roll_no'])) { ?>
           <span class="text-danger"><?php echo $err['roll_no']; ?></span> 
         <?php } ?>
                </div>  

                <div class="form-group"> 
                  <label for="photo">Photo:</label>
                  <div class="input-group mb-3">
                    <div class="custom-file"> 
                      <input type="file" class="custom-file-input bg-dark" id="image" name="image" placeholder="Choose Photo">
                      <label class="custom-file-label" for="photo" aria-describedby="photo"></label>
                    </div>
                  <?php if (isset($err['image'])) { ?>
           <span class="text-danger"><?php echo $err['image']; ?></span> 
         <?php } ?>
              </div>

              <div class="form-row">
                 <div class="form-group col-md-6">
                <label>Gender </label><br/>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male">Male</label>                  
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
                  <label class="form-check-label" for="female">Female</label>                  
                </div>
                <?php if (isset($err['gender'])) { ?>
           <span class="text-danger"><?php echo $err['gender']; ?></span> 
         <?php } ?>
            </div>

             <div class="form-group col-md-6">
              <label  for="programme">Class</label>   
              <select class="form-control" name= "class" id="programme">
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
           </fieldset>
             <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="ADD STUDENT" name="StudentName" id="StudentName">
            </div>
             <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div> 
</div>
<br/>


  
  <!--/Add Student -->
  <div class="row">
    <div class="col-md-1"></div>

    <?php
if (isset($_POST['FacultyName'])) {
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


    //form validation for password
    if (isset($_POST['password']) && !empty($_POST['password']))  {
      $password =  $_POST['password'];
    } else {
      $err['password'] =  'Enter your password';
    }


    //form validation for phone
    if (isset($_POST['phone']) && !empty($_POST['phone']))  {
      $phone =  $_POST['phone'];
    } else {
      $err['phone'] =  'Enter your phone number ';
    }

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
          $image='http://localhost:1080/exam/images/faculty/' . $image_name;
          //echo $image;

        }
        else{
          $err['image']="File couldnot uploaded";
        }
      }
      else{
        $err['image']="File size execeed";
      }
    }
    else{
      $err['image']="Invalid file type";
    }
  }
  else{
    $err['image']="Please choose file to upload";
  }


    //form validation for gender
    if (isset($_POST['gender']) && !empty($_POST['gender'])) {
      $gender =  $_POST['gender'];
    } else {
      $err['gender'] = "Select your gender";
    }
   if (count($err) == 0) {
      require_once '../connection.php';
      //print_r($connect);
        //redirect to next page
        //header("location:index.php");
      //sql to insert data
      $sql = "INSERT INTO faculty (name, phone, email, password, photo, gender) VALUES ('$name','$phone','$email','$password','$image','$gender')";
      $connect->query($sql);
      if($connect->affected_rows ==1 && $connect->insert_id > 0){
      $Fsuccess = "Faculty Data insert success";
      }
      else{
        $Ffailed="Faculty Data insert failed";
      }
     
      } else {
        $err['msg'] =  "failed";
      }
  }
  ?>
<!-- Add Faculty -->  
    <div class="col-md-6"style="margin-left: 15vw;">
    <div class="card">
      <div class="card-header">
         <?php if(isset($Fsuccess)){ ?>
            <p class="alert alert-success"><?php echo $Fsuccess; ?></p>
     <?php } ?>
   
     <?php if(isset($Ffailed)){ ?>
            <p class="alert alert-danger"><?php echo $Ffailed; ?></p>
     <?php } ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <fieldset>
              <legend><a id="addFaculty">Faculty Information</a></legend>
                <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="username">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter your name">
                  <?php if (isset($err['name'])) { ?>
           <span class="text-danger"><?php echo $err['name']; ?></span> 
         <?php } ?>
              </div>
              <div class="form-group col-md-6"> 
                  <label for="phone">Phone</label>            
                  <input type="phone" name="phone" id="phone" class="form-control"  placeholder="XXXXXXXXXX">
                  <?php if (isset($err['phone'])) { ?>
           <span class="text-danger"><?php echo $err['phone']; ?></span> 
         <?php } ?>
                </div>                
              </div>  

               <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="email">Email</label>            
                  <input type="email" name="email" id="email" class="form-control"  placeholder="abc@gmail.com">
                  <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
         <?php } ?>
                </div>
              <div class="form-group col-md-6">
                  <label for="password">Password</label>            
                  <input type="password" name="password" id="password" class="form-control" >
                  <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
         <?php } ?>
                </div>                
              </div>   
                
                          
              <div class="form-group"> 
                  <label for="photo">Photo:</label>
                  <div class="input-group mb-3">
                    <div class="custom-file"> 
                      <input type="file" class="custom-file-input bg-dark" id="image" name="image" placeholder="Choose Photo">
                      <label class="custom-file-label" for="photo" aria-describedby="photo"></label>
                    </div>
                  </div>
                  <?php if (isset($err['image'])) { ?>
           <span class="text-danger"><?php echo $err['image']; ?></span> 
         <?php } ?>
              </div>

                <div class="form-row">
             <div class="form-group col-md-12">
                <label>Gender </label><br/>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male">Male</label>                  
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
                  <label class="form-check-label" for="female">Female</label>                  
                </div>

                <?php if (isset($err['gender'])) { ?>
           <span class="text-danger"><?php echo $err['gender']; ?></span> 
         <?php } ?>
            </div>
              </div>
            </fieldset>
             <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit"  name="FacultyName"class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="ADD FACULTY">
              <a href="InsertSubject.php">
                <button class="smallwidth darktrans btn-dark btn  btn-outline-secondary p-3" type="button">Insert Subject</button>
              </a>
            </div>
             <small class="text-muted">
               <?php if(isset($err['msg'])) echo $err['msg']; ?>
             </small>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div>
</div>
<br/>  <!-- /Add Faculty -->
</div>
</div>


  <?php require_once "footer.php"; ?>
