<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="responsive.css"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UB messaging</title>
</head>
<body class="login-body" style="margin: 0px;">
    <img src="welcome.jpg" style="width:100%;height:100%; position:absolute; z-index:-1;"/>
    <header>
        <div class="mainhead">
            MESSAGING SYSTEM
        </div>
    </header>
    <main>
        <center>
        <div style="opacity:0.89; width: 70%;margin-top: 80px;" id="login-card">
        <form  method="post" action="receive.php">
        <div class="field">
            <label >
               Name    
            </label ><br>
            <input type="text"  name="Nam" required placeholder="Enter your name"/>
        </div >
            <div class="field">
                <label>
                    Matricule   
                 </label><br>
                 <input type="text"  required maxlength="8" name="Mat" placeholder="Enter your matricule"/>
            </div>
    <button class="login" id="log">Login</button>
       <p>
           <a href="submit.html">i dont have an account</a>
       </p>
        </form>

    </div>
    </center>
    </main>
   <?php
    session_start();
    $_SESSION['Mat']=NULL;
    $_SESSION['Name']=NULL;


?>
   
</body>
</html>