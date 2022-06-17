 <?php 
     session_start();
 if (isset($_SESSION['student'])) {
    header('location:http://localhost/exam/Student/index.php');
  }
   if (isset($_SESSION['faculty'])) {
    header('location:http://localhost/exam/Faculty/index.php');
  }
   if (isset($_SESSION['admin'])) {
    header('location:http://localhost/exam/Admin/index.php');
  }
  ?>