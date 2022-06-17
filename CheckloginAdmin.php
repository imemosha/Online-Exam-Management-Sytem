<?php session_start(); 
if(!isset($_SESSION['admin'])) {
	//header('location:header.php?msg=1');
  header('location:http://localhost/exam/header.php?msg=1');

} ?>