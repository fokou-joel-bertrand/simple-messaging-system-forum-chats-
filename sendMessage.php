<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
      session_start();
      $message=$_POST['msg'];
      $sessMat =$_SESSION['Mat'];
      $reciever= $_SESSION['Recipient'];
      $_SESSION['sentmsg']=$message;
      echo $message;
 date_default_timezone_set('Africa/Nairobi');
  $date = date('Y-m-d H:i:s');
  echo " at :  ".$date;    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) die($conn->connect_error);



$sql = "INSERT INTO message(period,seen,textMessage,sender,reciever) VALUES ('$date','unread','$message','$sessMat','$reciever');";
if(mysqli_query($conn,$sql)){
    echo "<br> Established connection to server";
}
else{
echo "<br><b style='color:red'>could not Established connection to server</b><br>"
.mysqli_error($conn);
}
//$result = $conn->query($sql);
header("location:chatPage.php");

?>
</body>
</html>