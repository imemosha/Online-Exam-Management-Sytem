<?php 
  //connection to database
require_once "../connection.php";

//get id from url: query string parameter
if (!isset($_GET['student_id']) || !is_numeric($_GET['student_id'])) {
  header('location:ManageStudent.php');
} else {
  $student_id = $_GET['student_id'];
}

//query to delete data from table categories
$sql = "delete from student where student_id=$student_id";

//execute query and get result object
$result = $connect->query($sql);

header('location:ManageStudent.php');


 ?>