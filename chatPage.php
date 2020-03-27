<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv ="refresh" content="<? $Refresh ?>">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">
<body class="chatpage-body" style="background:rgb(78, 126, 153);">
<?php
 session_start();
$studentInfo= $_SESSION['Recipient'];
 $Refresh=20;


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "message_system";
 $lastmsg="no messages sent by this person";
 $lastreply="you have not sent any message to this person yet";
 
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 if($conn->connect_error) die($conn->connect_error);
 
 $sql = "SELECT student_id, student_name, phone_No FROM account";
 $result = $conn->query($sql);

 while($row = $result->fetch_assoc()){
    if($studentInfo == $row['student_id']){
   $StudentName =  $row['student_name']; break;}}
  
   $sql = "SELECT period,seen,textMessage,sender,reciever FROM message";
 $result = $conn->query($sql);


echo'
<link rel="stylesheet" href="style.css">
<div class="shadow-page" style="margin:-30px 0px; width:100%;height:100%; position:absolute; left:0;right:0">
    <div>
    <h2 class="header" style="margin-bottom:-30px; padding: 40px 10px" class="float-left">'.$StudentName.'</h2><sm id="online" style="color:pink;font-size:20px; font-weight:bold; margin-left:20px;"> online</sm>
    <a href="main.php" ><button style="background:lightblue; position:absolute; width:100px; right:40px; top:50px; ">Home</button></a>
    </div>
    <div class="msg" id="msg" style="background-image:url(flower1.jpg); height:400px;">

';
while($row = $result->fetch_assoc()){
  if($studentInfo == $row['sender'] && $_SESSION['Mat']==$row['reciever']){
 $lastmsg =  $row['textMessage'];
 echo " <div style='background:white' class='sendermsg'>
 ".$lastmsg."
 </div>";
 }
 if($studentInfo == $row['reciever'] && $_SESSION['Mat']==$row['sender'] && $row['seen']='unread'){
  $lastreply =  $row['textMessage'];
  echo ' <div   class="recievermsg">
  '.$lastreply.'
  </div>';
  }
}
$sessMat=$_SESSION['Mat'];

$sql = "UPDATE message SET seen='read' where seen='unread' and sender='$studentInfo' and reciever='$sessMat'";
$result = $conn->query($sql);
if (!$result) die ("Database access failed: " . $conn->error);

  
  header("Refresh:" .$Refresh );
?>  
  
</div>
<form action="sendMessage.php" method="post">
<div class="input-container">
  <input type="text" placeholder="Enter message..." name="msg"class="text-pad" style="width:50%; margin: 5px 10px ;background-color: rgb(42, 42, 87);
    color:white;
    font-size: 17px;" required/>
  <button  class="sendmsg" >Send</button>
</div>
</form>
</div>

<script>
    var msg=document.getElementById('msg');
    msg.scrollTop=999999;
    var i=18;
    setInterval(() => {
        if(i<=8){
          document.getElementById('online').innerHTML="Checking for messages...";
          document.getElementById('online').style.color="white";
          
        }
        i--;
    }, 1000);
  </script>
</body>
</html>