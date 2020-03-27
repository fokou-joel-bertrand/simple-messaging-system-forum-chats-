<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UB messaging</title>
</head>
<?php
    session_start();
    if($_SESSION['Mat']==NULL || $_SESSION['Name']==NULL){
        header("location:login.php");
    }

?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css">
<body class="home-body">
    <header>
        <div class="mainhead">
            Welcome  
            <?php
                
               $name =  $_SESSION['Name'];
               echo $name;

            ?>
            !
        </div>
    </header>
    
        <div class="center">
        
        <div id="main">
        <div id="login-card">
       <div class="form" >
        <div id="nav-butts" class="form option">
        <div class="field">
          <a href="main2.php"><button class="send" id="send"> SEND A MESSAGE </button></a>
        </div >
            <div class="field">
               <a href="inbox.php"> <button id="inbox" class="inbox"> INBOX </button></a>
             </div>
             <div class="field">
            <a href="login.php"><button id="exit" onclick="alert('you won\'t be able to access your account once you logout, unless you login again ' )" class="exit " >EXIT</button exit ></a>
            </div>
        </div>
</div>
    </div>
</div>
</div>
<script>
   var navbutt= document.getElementById('nav-butts');
    margintop=-300;
    navbutt.style.margin=margintop +"px 0px 0px 0px";
     setTimeout(() => {
           margintop=0;
            navbutt.style.margin=margintop +"px 0px 0px 0px";
       
       },20);
  
</script>
</body>
</html>