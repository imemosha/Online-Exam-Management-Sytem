<!-- <?php //session_start(); 
//if((!isset($_SESSION['student'])) || (!isset($_SESSION['admin'])) || (!isset($_SESSION['faculty']))) {
//	header('location:header.php?msg=1');
} ?> -->
<?php session_start(); 
if(!isset($_SESSION['student'])) {
	header('location:header.php?msg=1');
} ?>