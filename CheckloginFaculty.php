<?php session_start(); 
if(!isset($_SESSION['faculty'])) {
	//header('location:index.php?msg=1');
  header('location:http://localhost/exam/header.php?msg=1');

} ?>