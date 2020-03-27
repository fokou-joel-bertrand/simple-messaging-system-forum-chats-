<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h2>Your Inbox</h2>
    <hr>
    <?php
   session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "message_system";
 
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 if($conn->connect_error) die($conn->connect_error);

 $sql = "SELECT period,seen,textMessage,sender,reciever FROM message";
 $result = $conn->query($sql);

 echo'<ul>';
while($row = $result->fetch_assoc()){
    if( $_SESSION['Mat']==$row['reciever'] && $row['seen']=="unread"){
        $sql2 = "SELECT student_id, student_name FROM account ";
        $result2 = $conn->query($sql2);
        while($row2 = $result2->fetch_assoc()){
            if($row2['student_id']==$row['sender']){

                echo '
                <li>
                <form method="post" action="virtualChatPage.php">
                   <div class="float-right grid-row">
                   <div class="label" id="NameLabel">'.$row2['student_name'].'</div>
                   <div class="label" style="display:block"  >'.$row['textMessage'].'</div>
            
                   <input  style="display:none" value='.$row2['student_id'].' name="hidden" style="background:pink">
                   <div class="col-butt">
                   <button  class="chat" style="background:pink">read</button>
                   </div></form>
                   </li>
            ';
              
            }
        }
   
}
}


echo '</ul>';

    ?>
</div>
    
</body>
</html>