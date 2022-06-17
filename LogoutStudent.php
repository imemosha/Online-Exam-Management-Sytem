<?php
session_start();
session_destroy();
//set cookie time to post time
setcookie('student',null,time()-1);
header('location:header.php');
?>