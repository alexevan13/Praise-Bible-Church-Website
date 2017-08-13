<?php
session_start();
?>
<?php include 'header2.php';?></div>
    </div>
        
<div class="wthree-heading">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
     <div class="about">  
   <?php
   $uname="";
   $pass="";
   $uname=$_POST["uname"];
$pass=$_POST["pass"];
   if($uname=="alexevan"&&$pass=="administrator")
   {
       $_SESSION["uname"]="alexevan";
     ?> <h2 align="center">Welcome Admin <a href="admin.php">Click Here</a> To Proceed</h2><?php
   }
   else{
?>
         <h3 align="center">Error In Login Please<a href="login.php"> Click Here </a>To Go To Login Page</h3>
         <?php
   }
   
   ?> 
        <?php include 'footer.php';?>