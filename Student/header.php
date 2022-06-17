
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="../css/color.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/Student.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<?php 
      require_once'../connection.php';
      //get id from url: query string parameter
?>

<?php session_start(); 
if(!isset($_SESSION['student'])) {
  header('location:http://localhost/exam/header.php?msg=1');
  exit();
} 
else {
    $student_id = $_SESSION['student_id'];
  }?>

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
//print_r($faculty);

 ?>

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-trans navbar-light fixed-top"> 
	  <a class="navbar-brand"href="index.php">
	  	<p><img src="<?php echo $student['photo'];?>" alt="Logo" class="rounded-circle mx-auto" style="max-height: 50px;width:auto;"> User Dashboard</p>
	  </a>
	   <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
	   aria-expanded="false" aria-label="Toggle navigation"></button>
   		<div class="collapse navbar-collapse" id="collapsibleNavId">
    		<ul class="navbar-nav ml-auto mt-2 mt-md-0 justify-content-end ">
		      <li class="nav-item"> 
		        <a class="nav-link " href="http://localhost/exam/Student/index.php#about">About<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="http://localhost/exam/Student/Routine.php">Routine</a>
		      </li>
		       
		      <li class="nav-item">
		        <a class="nav-link" href="http://localhost/exam/Student/Exam.php">Exam</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notification</a>
		        <div class="dropdown-menu" aria-labelledby="dropdownId">
		          
		          <a class="dropdown-item" href="#">Notice...</a>
		    
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
		        <div class="dropdown-menu" aria-labelledby="dropdownId">
		          
		          <a class="dropdown-item" href="http://localhost/exam/Student/index.php#Password">Update Password</a>
		          <a class="dropdown-item" href="http://localhost/exam/Student/index.php#profile">Update Profile</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="http://localhost/exam/Student/CheckResult.php">Result</a>
		      </li>
		       <li class="nav-item">
		        <a class="nav-link" href="http://localhost/exam/LogoutStudent.php">Logout</a>
		      </li>
    		</ul>
  		</div>
	</nav>
<!-- /Navigation -->

