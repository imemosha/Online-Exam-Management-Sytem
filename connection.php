<?php
//classname objectname=new classname();
//objectname=new classname();
$connect=new mysqli('localhost','root','','oems');
// $connect['connect_errno'] => $connect->connect_errno

if ($connect->connect_errno != 0) {
	die('Database Connection Error' . $connect->connect_error);
}
?>