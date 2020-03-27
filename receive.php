<?php
session_start();
$EnteredMatricule = $_POST['Mat'];
$EnteredName = $_POST['Nam'];


$_SESSION['Mat'] = $EnteredMatricule;
$_SESSION['Name'] = $EnteredName;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) die($conn->connect_error);

$sql = "SELECT student_id, student_name, phone_No FROM account";
$result = $conn->query($sql);

$bool = false;
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        if($row["student_id"] == $EnteredMatricule  && $row["student_name"] == $EnteredName)
        {
            $bool = true;
        }
    }
if($bool) {
    header("location:main.php");
}
 else { echo'<script>alert("wrong data");</script>'; header("location:login.php");}

}

?>