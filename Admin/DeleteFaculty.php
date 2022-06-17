<?php 
  //connection to database
require_once "../connection.php";

//get id from url: query string parameter
if (!isset($_GET['faculty_id']) || !is_numeric($_GET['faculty_id'])) {
  header('location:ManageFaculty.php');
} else {
  $faculty_id = $_GET['faculty_id'];
}

//query to delete data from table categories
$sql = "delete from faculty where faculty_id=$faculty_id";

//execute query and get result object
$result = $connect->query($sql);

header('location:ManageFaculty.php');


 ?>