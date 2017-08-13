  <?php   
    session_start();//session is a way to store information (in variables) to be used across multiple pages.  
    session_unset();
session_destroy(); 
    header("Location: login.php");//use for the redirection to some page  
    ?>  
<?php include 'header2.php';?></div>
<div class="wthree-heading">
                    <h2>Logout</h2>
                </div>
            </div>
        </div>
     <div class="about">
    <?php include 'footer.php';?>