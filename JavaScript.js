
var a = document.getElementById('div2');
var b = document.getElementById('div');

a.addEventListener('click', function1);

function function1()
{
    b.innerHTML = `
 <center><form method="post" action="result.php">
<pre>Name:              <input type="text" name="name" class="input" id="in1" placeholder="Enter your name here" ><br><br></pre>
<pre>Matricule Number:  <input type="text" class="input" name="matNumber" id="in2" placeholder="Enter your matricule number here" maxlength="8"><br><br></pre>
<pre>Phone Number:      <input type="text" class="input" id="in3" name="telNumber" placeholder="Enter your phone number here"><br><br></pre>
<input type="submit" id="sub" value = "Submit">
</form>
</center>

<style>
    .div2{text-align: left;}
    form{text-align:center;}
    .input{border: 1px solid black; border-radius: 15px; height: 50px; width:500px; font-size:20px; padding-left: 15px; font-weight:10px;}
    .input:hover{border: 1px solid blue;}
    #sub{font-size:50px; border:1px solid orange; border-radius:15px; bacKground-color:orange; padding:10px; color:bold;}
    #sub:hover{cursor: pointer; opacity: 0.5;}
    </style>
    `;
}




