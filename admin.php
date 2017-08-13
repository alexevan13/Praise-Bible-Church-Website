<?php
session_start();
?>
<?php include 'header2.php'; ?></div>

<div class="wthree-heading">
    <h2>Add Sermons</h2>
</div>
</div>
</div>
<?php
if(isset($_SESSION["uname"])){
if($_SESSION["uname"] == "alexevan") {
    echo '<div class="about container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-2">  
            
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    
                    <h3 class="panel-title">Insert Sermon</h3>  
                </div>  
                <div class="panel-body">  
                    
                    <form role="form" method="post" action="admin.php">  
                        <fieldset>  
                            <label>Sermon Title:</label>
                            <div class="form-group"  >  
                                <input class="form-control" required placeholder="Sermon Name" id="sname" type="text" name="sname" autofocus>  
                            </div>  
                                                        <label>Date : </label>

                            <div class="form-group">  
                                <input class="form-control" required placeholder="YYYY-MM-DD" id="date" name="date"  type="date" value="">  
                            </div>  
                                                                                    <label>MP3 Link : </label>

                            <div class="form-group">  
                                <input required class="form-control" placeholder="mp3 file link as you write in href"  name="mp3link" id="mp3link" type="text" value="">  
                            </div>
 <label>Scripture : </label>

                            <div class="form-group">  
                                <input required class="form-control" placeholder="Scripture"  name="scrip" id="scrip" type="text" value="">  
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Insert Sermon" name="Submit" >  

                            <!-- Change this to a button or input when using this as a form -->  
                            <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>
            </div>  
        </div> 
          
        <div class="col-md-4 col-md-offset-2">  
            <center> <a href="logout.php">Logout</a></center>
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    
                    <h3 class="panel-title">Delete Sermon</h3>  
                </div>  
                <div class="panel-body">  
                    
                    <form role="form" method="post" action="admin.php">  
                        <fieldset>  
                            <label>Sermon ID :</label>
                            <div class="form-group"  >  
                                <input class="form-control" required placeholder="Sermon ID" id="sid" type="text" name="sid" autofocus>  
                            </div>  
                            
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Delete Sermon" name="Submit1" >  

                            <!-- Change this to a button or input when using this as a form -->  
                            <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>
            </div>  
        </div>  
    </div>  
</div>  
</div>
    </div>  
</div>  
</div>';
include("dbconfig.php");
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection

if(isset($_REQUEST["Submit1"]))
{
    $sid="";
$sid=$_REQUEST["sid"];

    $sql = "DELETE FROM `sermon` WHERE id=".$sid.";";

if ($conn->query($sql) === TRUE) {
    echo "<center><h3 style=\"background-color:green;color:white\">Record Deleted successfully</h3></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if(isset($_REQUEST["Submit"]))
{
    $sname="";
$sname=$_REQUEST["sname"];
$mp3link="";
$mp3link=$_REQUEST["mp3link"];
$date="";
$date=$_REQUEST["date"];
$scrip="";
$scrip=$_REQUEST["scrip"];
    $sql = "insert into `sermon`(`id`,`sermon_title`,`mp3link`,`sermon_date`,`scrip`) values ( NULL,'".$sname."','".$mp3link."','".$date."','".$scrip."');";

if ($conn->query($sql) === TRUE) {
    echo "<center><h3 style=\"background-color:green;color:white\">New record inserted successfully</h3></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM sermon");
if ($result->num_rows > 0)
    {
    ?><div class="container"><table class="table table-hover"><tr><th>ID</th><th>SERMON NAME</th><th>MP3 LINK</th><th>SERMON DATE</th><th>SCRIPTURES</th></tr>
        <?php
    // output data of each row
            while ($row = $result->fetch_assoc()) {
            echo '<tr><td>'.$row["id"].'</td><td>'.$row["sermon_title"].'</td><td>'.$row["mp3link"].' </td><td>'. $row["sermon_date"].'</td><td> '.$row["scrip"].' </td></tr>';
       
    }
}else {
    echo "<center>No Sermons Inserted</center>";
    }
 
 
 
    
}}else {?>
    <h3 align="center" style="color:red;">Error : Please<a href="login.php"> Click Here </a>To Go To Login Again</h3>
    <?php   
}
echo '</table>';
        ?>
    </div>
 <?php include 'footer.php'; ?>