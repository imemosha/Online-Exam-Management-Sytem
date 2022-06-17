<?php @session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OEMS</title>
  <link rel="stylesheet" type="text/css" href="css/color.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/Student.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <!-- Body-->
  <?php if ((!isset($_SESSION['student'])) && (!isset($_SESSION['faculty'])) && (!isset($_SESSION['admin']))) {?>
<div class="jumbotron" style="background-color: rgb(255,255,255)">
   <div class="container-fluid" style="margin-top: -1.5rem;" align="center">
     <div class="row">
      <div class="col-md-12">
        <div class="card outerbox cardbg">
           <div class="container-fluid ml-auto">
              <div class="row" style="margin-top: 13rem;">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                  <h3 align="center" style="color:rgb(211, 255, 253); text-shadow:1px 1px 2px #000000">Your Online Testing Partner<br></h3>
                  <p>online exam management system to manage your online examination</p>
                    <hr>
                   <a href="#Modal"><button class="btn-pt btn-outline-pt btn-lg" type="button"> Get Started
                      </button></a>
                </div>
              </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- login Modal -->
<div class="modal hide fade in" id="Modal"> <!-- role="dialog" -->
  <div class="modal-dialog modal-md" role="document">
    <!--Content-->
    <div class="modal-content card">
      <div class="text-white rgba-stylish-strong py-3 px-3 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <div class="container-fluid">
            <div class="row align-items-baseline d-flex">
                <div class="col-md-4">
                    <img src="images/bgexam.png" height="auto" width="140vw"alt="logo">
                </div>
                <div class="col-md-4">
                    <h3 class="modal-title w-100 text-dark font-weight-bold " id="myModalLabel"><strong>SIGN</strong> <strong style="color:#79e3ed;"> IN</strong></h3>
                </div>
                <div class="col-md-4">
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        </div>

           <ul role="tablist" class="nav nav-tabs nav-justified" id="Tab"style="opacity:0.6;color:black;">
            <li role="presentation" class="nav-item active" id="1">
              <a class="text-dark nav-link" data-toggle="tab" href="#Student" role="tab"><h5>Student</h5></a>
            </li>
            <li role="presentation" class="nav-item" id="2">
              <a  class="text-dark nav-link"data-toggle="tab" href="#Admin" role="tab"><h5>Admin</h5></a>
            </li>
            <li role="presentation" class="nav-item" id="3">
              <a  class="text-dark nav-link"data-toggle="tab" href="#Faculty" role="tab"><h5>Faculty</h5></a>
            </li>
          </ul>

        <!--  Modal Body-->
  
        <div class="modal-body modalform text-dark">
          <!-- Validation for Student Body -->
          <?php 
  if (isset($_COOKIE['student'])) {
    session_start();
    $_SESSION['student'] = $_COOKIE['student'];
    header('location:http://localhost/exam/Student/index.php');
  }
    if (isset($_POST['studentLogin'])) {
    $err = [];
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
         //check no of error to process login
    if (count($err) == 0) {
      require_once'connection.php';
      $sql="select * from student where email='$email' and password='$password'";
      //execute
      $result=$connect->query($sql);

      if($result->num_rows > 0){
        $user=$result->fetch_assoc();
          //check remember me button
        if (isset($_POST['remember'])) {
          //set cookie
          setcookie('student',$email,time()+24*60*60);
        }

        //start session
        @session_start();
        //store username into session
        $_SESSION['student']=$user['email'];
        $_SESSION['student_name']=$user['name'];
        $_SESSION['student_id']=$user['student_id'];
        //redirect to next page
        header("location:http://localhost/exam/Student/index.php");
      } else {
        $err['message'] =  "login failed";
      }
    }
  }?>
   <!-- Validation for Faculty Body -->
 <?php 
  if (isset($_COOKIE['faculty'])) {
    session_start();
    $_SESSION['faculty'] = $_COOKIE['faculty'];
    header('location:http://localhost/exam/Faculty/index.php');
  }
    if (isset($_POST['facultyLogin'])) {
    $err = [];
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
         //check no of error to process login
    if (count($err) == 0) {
      require_once'connection.php';
      $sql="select * from faculty where email='$email' and password='$password'";
      //execute
      $result=$connect->query($sql);

      if($result->num_rows > 0){
        $user=$result->fetch_assoc();
          //check remember me button
        if (isset($_POST['remember'])) {
          //set cookie
          setcookie('faculty',$email,time()+24*60*60);
        }

        //start session
        @session_start();
        //store username into session
        $_SESSION['faculty']=$user['email'];
        $_SESSION['faculty_name']=$user['name'];
        $_SESSION['faculty_id']=$user['faculty_id'];
        //redirect to next page
        header("location:http://localhost/exam/Faculty/index.php");
      } else {
        $err['message'] =  "login failed";
      }
    }
  }?>
      <!-- Validation for Admin Body -->
          <?php 
  if (isset($_COOKIE['admin'])) {
    session_start();
    $_SESSION['admin'] = $_COOKIE['admin'];
    header('location:http://localhost/exam/Admin/index.php');
  }
    if (isset($_POST['adminLogin'])) {
    $err = [];
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
         //check no of error to process login
    if (count($err) == 0) {
      require_once'connection.php';
      $sql="select * from admin where email='$email' and password='$password'";
      //execute
      $result=$connect->query($sql);

      if($result->num_rows > 0){
        $user=$result->fetch_assoc();
          //check remember me button
        if (isset($_POST['remember'])) {
          //set cookie
          setcookie('admin',$email,time()+24*60*60);
        }

        //start session
        @session_start();
        //store username into session
        $_SESSION['admin']=$user['email'];
        $_SESSION['admin_name']=$user['name'];
        $_SESSION['admin_id']=$user['admin_id'];
        //redirect to next page
        header("location:http://localhost/exam/Admin/index.php");
      } else {
        $err['message'] =  "login failed";
      }
    }
  }?>    
          <!--Student Body-->
          <div class="tab-content ">
          <div role="tabpanel" class="tab-pane active"  id="Student">
     <?php if (isset($err['message'])): ?>
      <p class="alert alert-danger"><?php echo $err['message'] ?></p>
    <?php endif ?>

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 1): ?>
      <p class="alert alert-danger">Please login to access dashboard page</p>
    <?php endif ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <fieldset>
              <div class="form-group">
                <label for="email">Student Email:</label>
                <input class="form-control" name="email" id="email" type="email" autofocus placeholder="E-mail">
                <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
          <?php } ?>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                  <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
          <?php } ?>
              </div>
              </fieldset>
              <div class="form-group">
                <label>
                <input type="checkbox" value="" name="remember">
                Remember me
                </label>
              </div>                        
              <div class="form-group">
                <input type="submit" name="studentLogin" id="studentLogin" value="LOG IN" class="btn btn-lg btn-dark btn-block">
              </div>
            <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
          </form>
        </div>
      <div role="tabpanel"class="tab-pane fade" id="Admin">
          <!--Admin Body-->         
     <?php if (isset($err['message'])): ?>
      <p class="alert alert-danger"><?php echo $err['message'] ?></p>
    <?php endif ?>

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 1): ?>
      <p class="alert alert-danger">Please login to access dashboard page</p>
    <?php endif ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <fieldset>
              <div class="form-group">
                <label for="email">Admin Email:</label>
                <input class="form-control" name="email"id="email" type="email" autofocus placeholder="E-mail">
                <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
          <?php } ?>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                  <input class="form-control" placeholder="Password" name="password" id="password" type="password">
                  <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
          <?php } ?>
              </div>
              <div class="form-group">
                <label>
                <input type="checkbox" value="" name="remember">
                Remember me
                </label>
              </div>                        
              <div class="form-group">
                <input name="adminLogin" id="adminLogin" type="submit" value="LOG IN"  class="btn btn-lg btn-dark btn-block">
              </div> <!-- onClick="location.href='admin/header.php'" -->
            </fieldset>
            <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
          </form>
        </div>
        <div role="tabpanel"class="tab-pane fade"  tabindex="0" id="Faculty">
          <!--Faculty Body-->       
    <?php if (isset($err['message'])): ?>
      <p class="alert alert-danger"><?php echo $err['message'] ?></p>
    <?php endif ?>

    <?php if (isset($_GET['msg']) && $_GET['msg'] == 1): ?>
      <p class="alert alert-danger">Please login to access dashboard page</p>
    <?php endif ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <fieldset>
              <div class="form-group">
                <label for="email">Faculty Email:</label>
                <input class="form-control" name="email" id="email" type="email"  autofocus placeholder="E-mail">
                <?php if (isset($err['email'])) { ?>
           <span class="text-danger"><?php echo $err['email']; ?></span> 
          <?php } ?>
              </div>
              <div class="form-group">
                <label for="my-textarea">Password:</label>
                  <input class="form-control" placeholder="Password" name="password" id="password" type="password">
                  <?php if (isset($err['password'])) { ?>
           <span class="text-danger"><?php echo $err['password']; ?></span> 
          <?php } ?>
              </div>
              <div class="form-group">
                <label>
                <input type="checkbox" value="" name="remember">
                Remember me
                </label>
              </div>                        
              <div class="form-group" >
                <input name="facultyLogin" id="facultyLogin" type="submit" value="LOG IN" class="btn-lg text-lg btn btn-dark btn-block">
              </div>
            </fieldset>
            <small class="text-muted">
               <?php if(isset($err['messsage'])) echo $err['message']; ?>
             </small>
          </form>
        </div>
      </div>
      </div>
       
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->


<?php require_once "footer.php"; ?>
<?php } 
  else{
    header('location:CheckAccount.php');
    }?>