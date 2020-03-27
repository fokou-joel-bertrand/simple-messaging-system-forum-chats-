<?php
include 'treatment.php';
session_start();

$NName = $_POST['Nam'];
$Matricule = $_POST['Mat'];
$Telephone = $_POST['telNumber'];  


$_SESSION['Mat'] = $Matricule;
$_SESSION['Name'] = $NName;

$hn = "localhost";
$un = "root";
$pw = "";
$db = "message_system";


$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "INSERT INTO account VALUES('$Matricule', '$NName', '$Telephone')";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
else
header("location:main.php");
?>