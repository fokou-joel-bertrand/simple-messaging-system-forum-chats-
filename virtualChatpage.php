<?php
session_start();
$studentInfo = $_POST['hidden'];
$_SESSION['Recipient']=$studentInfo;

header("location:chatPage.php");


?>