

var mainPage = document.getElementById("main");  
var send = document.getElementById('send');
var inbox = document.getElementById('inbox');
send.addEventListener("click", ()=>{display(addressPage)});
inbox.addEventListener("click", ()=>{display(inboxPage)});
       
        function display(pageName){
            
            mainPage.innerHTML = pageName;
           
            var chat = document.getElementById('chat');
            chat.addEventListener("click", ()=>{display(chatPage)});
    
            
            
        }



























        
        
        
        
       
    var addressPage=` <div>
    <h2>Address</h2>
    <hr>
    <div>
    <ul>
      <li>
         <div class="float-right grid-row">
         <div class="label"> name</div>
         <div class="label"> matricule</div>
         <div class="col-butt">
         <button id="chat" class="chat" style="background:pink">chat</button>
         </div>
         </li>

         <li>
         <div class="float-right grid-row">
         <div class="label"> name</div>
         <div class="label"> matricule</div>
         <div class="col-butt">
         <button id="chat" class="chat" style="background:pink">chat</button>
         </div>
         </li>
      
         <li>
         <div class="float-right grid-row">
         <div class="label"> name</div>
         <div class="label"> matricule</div>
         <div class="col-butt">
         <button id="chat" class="chat" style="background:pink">chat</button>
         </div>
         </li>
      
         <div>
    </ul>
    </div>
  </div>
`;
 
   var inboxPage=`
    <div>
       <h4>Your  inbox</h4>
       <hr>
       <div>
       <ul>
         <li>
            <div class="float-right grid-row">
            <div class="label"> sender name</div>
            <div class="label"> YOU are highly welcomed to...</div>
            <div class="col-butt">
            <button id="chat" class="chat" style="background:pink">read</button>
            </div>
            </li>
   
            <li>
            <div class="float-right grid-row">
            <div class="label"> Fokou Joel</div>
            <div class="label"> hello ma gi, how are you</div>
            <div class="col-butt">
            <button id="read" class="chat" style="background:pink">read</button>
            </div>
            </li>
         
            <li>
            <div class="float-right grid-row">
            <div class="label"> Miriam lizzy Lydie</div>
            <div class="label"> i want to go home, i am hungry</div>
            <div class="col-butt">
            <button id="read" class="chat" style="background:pink">read</button>
            </div>
            </li>
         
            <div>
       </ul>
       <div>
     <
    </div>
   `
   var chatPage=`
   <div class="shadow-page">
    
         <h2 class="header" class="float-left">Recipient</h2>
     
     
     <div class="msg">
       last message
     </div>
     <div class="input-container">
       <input type="text" class="text-pad"></input>
       <button class='sendmsg'>Send</button>
     </div>
     </div>
   `
        
        
 