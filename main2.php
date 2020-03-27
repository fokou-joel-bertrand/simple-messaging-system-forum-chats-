<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UB messaging</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">
<div>
    <h2>Address</h2>
    <a href="main.php" ><button style="padding:10px; background:lightblue; position:absolute; width:100px; right:40px; top:30px; ">Home</button></a>
   
    <hr>
    <div>
    <ul>
        <center>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) die($conn->connect_error);

  $sql = "SELECT student_id, student_name, phone_No FROM account";
  $result = $conn->query($sql);
  echo'<ul id="contact-list">';
   while($row = $result->fetch_assoc()) {
       if($_SESSION['Mat'] == $row['student_id']) continue;

 
    echo '

   
    <li>
    <form method="post" action="virtualChatPage.php">
       <div class="float-right grid-row">
       <div class="label NameLabel">'.$row['student_name'].'</div>
       <div class="label "  style="display:block"  >'.$row['phone_No'].'</div>

       <input  style="display:none" value='.$row['student_id'].' name="hidden" style="background:pink">
       <div class="col-butt">
       <button  class="chat" style="background:pink">Chat</button>
       </div></form>
       </li>
';}
?>
  </ul>
   </div>
   </div>
   <script>

      

  

   </script>
   </body>
   </center>
</html>