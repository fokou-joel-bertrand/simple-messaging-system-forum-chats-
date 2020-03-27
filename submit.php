<!DOCTYPE html>
<html lang="en">
    <head id="head">
        <meta charset="utf-8">
    <title>Messaging</title>
    <link rel="stylesheet" href="CSS.css">
    <style>
    .div2{text-align: left;}
     form{text-align:center; font-size: 40px;}
    .input{border: 1px solid black; border-radius: 15px; height: 50px; width:500px; font-size:20px; padding-left: 15px; font-weight:10px;}
    .input:hover{border: 1px solid blue;}
    #sub{font-size:50px; border:1px solid orange; border-radius:15px; bacKground-color:orange; padding:10px; color:bold;}
    #sub:hover{cursor: pointer; opacity: 0.5;}
    </style>
    </head>
<body>
 
    <div class="container">
        <div class="cont-item div1"> MESSAGING SYSTEM</div>

        <form method="post" action="result.php">
<pre>Name:             <input type="text" name="name" class="input" placeholder="Enter your name here" required><br><br></pre>
<pre>Matricule Number: <input type="text" class="input" name="matNumber" placeholder="Enter your matricule number here" maxlength="8" required><br><br></pre>
<pre>Phone Number:     <input type="text" class="input"  name="telNumber" placeholder="Enter your phone number here" required><br><br></pre>
<input type="submit" id="sub" value = "Submit">
</form><br><br><br>
        <div class="div3">University Of Buea - Cameroon</div>
</div>


</body>
</html>

