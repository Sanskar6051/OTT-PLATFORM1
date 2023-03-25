<?php   session_start();    ?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> WATCHALE </title>
<!-- CSS -->
<link rel="stylesheet" href="myprofile.css"/>
<link rel="stylesheet" href="css/lightslider.css"/>

  <!-- Fav Icon -->
  <link rel="Shortcut icon" href="Watchale-1.png"/>
  <!--using FontAwesome--------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  </head>
  <body>
       

        <!--navigation-------------->
        <nav>
            <!--logo--------------->
            <a href="#" class="logo">
            <img src="Watchale-2.png"/>
            </a>
            <!--menu-------------->
            <ul class="menu">
                <li><a href="watchale-login.php" >Home </a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Shows</a></li>
                <li><a href="#">Hollywood</a></li>

            </ul>
            <style>
                .menum{
                    border: 1px solid black;
                }

            </style>
            <ul class="menu">
            
                <li class="menum"><a href="#"> <?php echo("Hello ".$_SESSION['name']); ?> </a></li>
                

            </ul>

            <!--search------------->
           

            <i class="fas fa-sign-out-alt"><a href="logout.php">Logout</a></i>
            
        </nav>
        <section>
     
         

     <div  class="boxsign"  >
         
         <ul>
             <li>
                 <div class="boxsign-c1">
                     <img src="Watchale-3.png" alt="">
                 </div>
                 
             </li>

             <li>

         <div class="boxsign-c2">
             <!-- <img src="back1.jpg" > -->
             <div class="ping">
                 <ul>
                     <li><a href="#" class="he1" >UPDATE PASSWORD </a> </li>  
                     <!-- <li> <a href="signin.html" class="he" id="signin">SIGN-IN</a></li>   <h2 class="he" >SIGN-UP</h2> -->
                    
                      
                 </ul>
             </div>

             

                 <div >
                     <form action="updateTB.php" method="post">
                         <ul >
                             
                         <!-- <li> 
                         <input type="text" placeholder="  +91  " readonly class="fill2" >
                         
                         </li>
                         <li> 
                             <input type="text" placeholder="INDIA" readonly class="fill3" >
                             

                             </li> -->
                             <li>
                                <label for="phone" ></label>
                                <input type="tel" placeholder="ENTER YOUR CONTACT" id="phone" name="phone" pattern="[0-9]{10}" class="fill"  >
                                <i class="fas fa-phone"></i>
                                </li>
                             
                             
                             
                             <li>
                         <label for="pass" > </label>
                         <input type="password" placeholder="ENTER OLD PASSWORD" id="pass" name="pass" class="fill" >
                         <i class="fas fa-key"></i>

                         <!-- <li>
                             
                             <label for="email" ></label>
                         <input type="email"  placeholder="ENTER YOUR EMAIL" required id="email" name="email" class="fill" >
                         </li> -->

                         <li>
                         <label for="newpass" > </label>
                         <input type="password" placeholder="ENTER NEW PASSWORD" id="pass" name="newpass" class="fill" >
                         <i class="fas fa-key"></i>

                         </li>
                         <li>
                             <!-- <input type="submit"  class="sub" > -->
                             <button type="submit"  class="sub"  >SUBMIT</button>
                         </li>

                         </ul>
                     </form>
                 </div>
             </div>
             </li>
             </ul>
     </div>

</section>





</body>

</html>