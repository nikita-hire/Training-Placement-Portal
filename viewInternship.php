<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>

          .dropbtn {
  background-color:white;
  color: black;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: grey;
}
    * {
           user-select: none;
          box-sizing: border-box;
          border-bottom: 00px;

}
      /*  
  Side Navigation Menu V2, RWD
  ===================
  Author: https://github.com/pablorgarcia
 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3443;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #5C5C5C;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: white;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}


    </style>
        <style>
    * {
           user-select: none;
          box-sizing: border-box;
          border-bottom: 00px;

}
body{
  background: url("i18.jpg");
  background-size: cover; 

}

        hr{
           border: none;
            height: 70px;
            background: #4a4a4a;
            margin-top: -70px;
        }
        #sidebar .list-items li:hover{
   color: cyan;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0 5px #33ffff,
               0 0 10px #9B2F9B ;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
    </style>    
    <title>Internship</title>
    <link rel="stylesheet" href="studdashcss.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

 <body background="">
  <nav style="background: #1b1b1b;height: 70px;">
  <img src="logo1.png" style="height: 70px;width: 200px" >
 <div><?php 
      session_start(); 
      error_reporting(0);?> 
      <h3 style="margin-top: -50px;color: white;margin-left: 1200px;font-size: 20px "><?php  
      echo $_SESSION['prn']. "-" .$_SESSION['name'] ; 
      $prn=$_SESSION['prn'];
    ?>
  </div>
  <div> 
    <img src="<?php echo 'image/'.$_SESSION['proimg'];?>"style="height: 60px;width: 60px;margin-top: -80px;border-radius: 70px;margin-left: 1450px "> 
      </h3>
      </div> 


    <div class="wrapper" style="margin-top: 20px;position: fixed">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar" style="position: fixed;">
        <div class="title">Menu</div>
        <ul class="list-items">
          <li><a href="studdash.php">Dashboard<a></li>
          <li><a href="studProfile.php">Profile</a></li>
           <li><a href="viewApplied.php">View T&P History</a></li>
          <li><a href="studlogout.php">Log Out</a></li>
         
        </ul>
      </nav>
    </div>
    <div  style="margin-top:50px; margin-left: 30px;color: white">
  <h1 style="color:black;font-family:Gabriola;font-size: 35px;"><center><b>INTERNSHIP NOTICE</b></center></h2>
  <br><br>
<div id="body">   
<?php
   
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password =""; /* Password */
    $dbname = "placement"; /* Database name */
    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    //error_reporting(0);
    //session_start();
     $prn=$_SESSION['prn'];
     $name=$_SESSION['name']; 
     //$stream=$_SESSION['stream']; 
     if($prn==true)
     {    

     }
     else
     {
        header('Location:http://tpwebsite/studlogin.php');
     }
     $sql="SELECT * FROM uploadattach WHERE section='Internships' ORDER BY date ASC";
 //$result=mysqli_query($con,$sql);
    echo "<center><table class='container'>";
    echo "<tr>";
    //echo "<th><center>SECTION</center></th>";
    echo "<th><center>DATE</center></th>";
    echo "<th><center>DESCRIPTION</center></th>";
    echo "<th><center>SHOW FILES IF ANY</center></th>";
    echo "<th><center>CLICK IF APPLIED</center></th>";
    echo "</tr>";
  
    $result=$con->query($sql);    
    $num=1;
    if($result-> num_rows > 0)
    {
      while($row=mysqli_fetch_array($result))
      {  ?> 
        <form method="POST" action="viewInternship.php?id=<?=$row['id']?>">
        
         <tr>
         <!--<td><center><?php //echo $row[1]?></center></td>-->
        <td><center><?php echo $row[2]?></center></td>
        <td><center><?php echo $row[3]?></center></td>
    
         <td><a href='<?php echo "uploads/".$row['file'];?>' target='_blank'><center>
         <input type='submit' class="dropbtn" value='VIEW FILE'></center></a></td>
          <form method="POST" action="viewInternship.php?id=<?=$row['id']?>" onsubmit="alert('Successfully Applied!!');">
        <td><center><input type='submit' name='apply' class="dropbtn" value='APPLIED TO'></center></td>
        </form>
        </tr>

        
    <?php       
      }
    }
         //$id=$_GET['id'];
?>
</table></center>
    </form>
</div>
</div> 
</body>
</html>
<?php
    
//session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password =""; /* Password */
$dbname = "placement"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
if (!$con) 
{
  die("Connection failed: " . mysqli_connect_error());
}

error_reporting(0);
//session_start();
     $id=$_GET['id'];
     $prn=$_SESSION['prn'];
     $name=$_SESSION['name'];
     if(isset($_POST['apply']))      
      {
            //$id=$_GET['id'];
             $sql="INSERT INTO historynotice (company,section) 
                  SELECT company,section FROM uploadattach WHERE id ='".$id."' ";
            if($con->query($sql)==TRUE)
            {
                echo "Record Saved";
                $sql="UPDATE historynotice set prn='$prn', name ='$name' WHERE name='".$name."'";
                if($con->query($sql)==TRUE)
                {
                   header("Location: http://tpwebsite/studdash.php");
                   exit();
                
                }
                else
                {
                    echo "Error: ".$sql."<br>".$con->error;
                }
                exit();
            }
            else
            {
                echo "Error: ".$sql."<br>".$con->error;
            } 
      }
?>
</div> 
  </body>
</html>
