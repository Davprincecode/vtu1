<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Olinkvtu Admin</title>
</head>
<body>
<nav>
    <div class="navflex">
        <div class="fordotb">
            <h4>logo</h4>
          </div>
        <div class="fordotc">
            <h4>WELCOME TO</h4>
            <p>ADMIN PANEL</p>
          </div>
        <div class="fordotd">
            <i class="fas fa-bars" onclick="opennav()"></i>
          </div>
    </div>
</nav>

    <div class="mainsectionflex">

      <div class="sidebarcontainer">
          <div class="barcontrol">
            <i class="fas fa-bars" onclick="adjustmenu()"></i>  
          </div>

       <ul>
        <li class="active"><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Home</span> </a>
        </li>
        
           <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Api Key</span></a>
        </li>
        <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Clients</span></a>
        </li>
        <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Transaction History</span></a>
        </li>
        <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Notification</span></a>
        </li>
        <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Feedback</span></a>
        </li>
           <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Reviews</span></a>
           </li>

           <li><a href="">
            <i class="fas fa-bars" id="icon"></i> <span class="listholder">Logout</span></a>
            </li>
         
       </ul>

      </div>
<!-- ===================== -->
      <div class="maincontainer">

      <div class="infocontainer">
        <h2>website overview</h2>
      </div> 
      
     <!-- <div class="walletflex">
         <div class="walletbalance">
             <div class="imgcflex">
                 <h4>wallet ballance</h4>
                 <p>1222222256</p>
             </div>
         </div>
         <div class="walletbalance">
             <div class="imgcflex">
                 <h4>wallet ballance</h4>
                 <p>1222222256</p>
             </div>
         </div>
         <div class="walletbalance">
             <div class="imgcflex">
                 <h4>wallet ballance</h4>
                 <p>1222222256</p>
             </div>
         </div>
     </div> -->
 <a href="">
     <div class="rechargecardflex">
         <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>admin : 1</p>  
         </div></a>
         <a href="">
         <div class="cardcontainer">
              <div class="imgflex">
             <div class="imgrcontainer">
                 <img src="../images/resultchecker.png" alt="">
             </div>
            </div>

             <p>clients : 22222383838</p>  
         </div></a>
         <a href="">
         <div class="cardcontainer">
             <div class="imgflex">
             <div class="imgrcontainer">
                 <img src="../images/resultchecker.png" alt="">
             </div>
            </div>
             <p>visitors : 52662737373</p>  
         </div></a>

         <!-- <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div>
         <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div> -->

         <!-- <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div>
         <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div>
         <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div>
         <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div>
         <div class="cardcontainer">
            <div class="imgflex">
                <div class="imgrcontainer">
                    <img src="../images/resultchecker.png" alt="">
                </div>
               </div>
             <p>airtime top up</p>  
         </div> -->
     </div>

     <div class="transactiontable">
         <h4>Admin Details</h4>
         <table>
             <tr>
                 <th>Username</th>
                 <th>Password</th>
                 <th>Edit</th>
             </tr>

             <tr>
                 <td>davprincecode</td>
                 <td>password</td>
                 <td> <a href="">edit</a> </td>
              
             </tr>
         </table>
     </div>

</div>
<!-- =================== -->
    </div>

<!-- <div class="footer">
    <footer>
        <p>coppyright 2022 all rights reserved.</p>
        <p>re-touncg\hed phedocndk</p>
    </footer>
</div> -->
<script>
    let navflex = document.querySelector('.sidebarcontainer');
    let a = 0;

 function opennav() {
     if(a == 0){
        navflex.style.right = "0px";
        a=1;
     }else{
        navflex.style.right = "-300px";
        a=0;
     }
    
 }

 let nav = document.querySelector('nav');
 let sidebarcontainer = document.querySelector('.sidebarcontainer');
 let maincontainer = document.querySelector('.maincontainer');
 let listholder = document.querySelectorAll('.listholder');
 let icon = document.querySelectorAll('#icon');

 let ancor = document.querySelectorAll('.sidebarcontainer a');

 
    let b = 0;

function adjustmenu(){
    if(b == 0){
        nav.style.width ="96%";
        sidebarcontainer.style.width ="53px";
        maincontainer.style.marginRight = "50px";
        
     for (let index = 0; index < listholder.length; index++) {
        listholder[index].style.display = "none"; 
     }

     
for (let x = 0; x < ancor.length; x++) {
    ancor[x].style.width = "50px"; 
}
        b=1;
    }else{
        nav.style.width ="80%";
        sidebarcontainer.style.width ="269px";
        maincontainer.style.marginRight = "250px";

    for (let index = 0; index < listholder.length; index++) {
        listholder[index].style.display = "inline-block"; 
     }
    for (let x = 0; x < ancor.length; x++) {
    ancor[x].style.width = "200px";
    }
      b=0;  
     }
}

</script>
</body>
</html>