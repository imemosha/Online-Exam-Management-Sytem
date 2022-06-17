<?php 
  //connection to database
require_once "../connection.php";

//get id from url: query string parameter
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  header('location:suject.php');
} else {
  $id = $_GET['id'];
}

//query to delete data from table categories
$sql = "delete from subject where id=$id";

//execute query and get result object
$result = $connect->query($sql);

header('location:subject.php');


 ?>