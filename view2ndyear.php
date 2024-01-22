<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <style>
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
    text-align: center;
    overflow: hidden;
    width: 90%;
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
    background-color: #323C50;
}

.container th {
    background-color: #323C50;
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
  color: black;
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
  box-sizing: border-box;
}
body{
  background: url(i5.jpg);
  background-size:cover; 
}

        hr{
           border: none;
            height: 70px;
            background: #404040;
            margin-top: -70px;
        }

 #sidebar .list-items li:hover{
   color: cyan;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
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
    <title>2nd Year</title>
    <link rel="stylesheet" href="studdashcss1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <nav style="background: #1b1b1b;height: 70px;">
    <img src="logo1.png" style="height: 70px;width: 200px" >  
    <div>
        <?php
        session_start(); 
      error_reporting(0);?><h3 style="margin-top: -50px;color: white;margin-left: 1250px "><?php
      echo $_SESSION['name'] ."-";
    ?></div>
    <div><img src="s2.png" style="height: 60px;width: 60px;margin-top: -80px;border-radius: 70px;margin-left: 1450px ">
  </h3> 
 </div>
    <div class="wrap" style="margin-top: 20px;position: fixed">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar" style="position: fixed">
        <div class="title">Menu</div>
        <ul class="list-items">

          <li><a href="techdash.php"></i>Dashboard<a></li>
           <li><a href="selectuploadnotice.php"></i>Upload Notice</a></li>
          <li><a href="studsection.php"></i>View Students</a></li>
          <li><a href="techlogout.php"></i>Log Out</a></li>
          
                   <!-- <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>-->
        </ul>
      </nav>
    </div>

<div  style="margin-top:140px; margin-left: 70px;color: white">
  <h1 style="color: black"><center>2nd Year Students</center></h1>
  <br><br>
<div id="body"> <?php
  
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
  /*session_start();
  $username= $_SESSION['username'];
  echo "<br><br><br>";*/
  echo "<center><table class='container'>";
  echo "<tr>";
  //echo "<th>Sr.No</th>";
  echo "<th>Enrollment No.</th>";
  echo "<th>Name</th>";
  echo "<th>Section</th>";
  echo "<th>Company</th>";
  echo "</tr>";

  $sql="SELECT * FROM student s, historynotice h where s.prn=h.prn AND s.stream='2nd Year' ";
  $result=$con->query($sql);    
  $num=1;
  if($result-> num_rows > 0){
    while($row=mysqli_fetch_array($result) )
    {
      echo "<tr>";
      echo "<td>".$row['prn']."</td>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['section']."</td>";
      echo "<td>".$row['company']."</td>";
      $num++;
      echo "</tr>";
    }
  }
  echo "</table></center>";
  //mysql_free_result($result);

?>
</div>
</body>
</html>

