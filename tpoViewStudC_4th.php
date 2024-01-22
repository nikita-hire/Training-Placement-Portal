<?php
session_start();
  
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
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <style>
                  * {
  box-sizing: border-box;
}
body{
  background: url(i40.jpg);
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
    <style >
  /* Dropdown Button */
.dropbtn {
  background-color:white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: grey;
}

/* The search field */
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

/* The search field when it gets focus/clicked on */
#myInput:focus {outline: 3px solid #ddd;}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  border: 1px solid #ddd;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
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
    background-color: #323850;
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
  color: #323C50;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}

    </style>
    <title>Student Information</title>
    <link rel="stylesheet" href="studdashcss1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <nav style="background: #1b1b1b;height: 70px;">
    <img src="logo1.png" style="height: 70px;width: 200px">
      <div>
    <?php
        //session_start(); 
      error_reporting(0);?><h3 style="margin-top: -50px;color: white;margin-left: 1250px;font-size: 20px;"><?php
      echo $_SESSION['clgcode']."-".$_SESSION['clgname']; 
    ?></div><div>
      <img src="logo.png" style="height: 60px;width: 60px;margin-top: -80px;border-radius: 70px;margin-left: 1450px ">
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
          <li><a href="tpodash.php">Dashboard<a></li>
          <li><a href="tpoViewStudC.php">View Students</a></li>
          <li><a href="viewFaculty.php">View Department TPO</a></li>
          <li><a href="logoutclg.php">Log Out</a></li>
                       
        </ul>
      </nav>
    </div>
<div>
  <h4 style="margin-top: 50px;font-family: Gabriola;font-weight: bold;font-size: 70px;color:black;margin-left: 300px">Computer-4th Year Students</h4>

</div>
<div>
  <div class="dropdown" style="margin-left: 1000px;margin-top: 30px;">
  <button onclick="myFunction()" name="dept" class="dropbtn">Department</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="tpoViewStudC.php">Computer</a>
    <a href="tpoViewStudM.php">Mechanical</a>
    <a href="tpoViewStudCi.php">Civil</a>
    <a href="tpoViewStudI.php">IT</a>
    <a href="tpoViewStudE.php">Electrical</a>
  </div>
</div>
<div class="dropdown" style="margin-right: -1050px;margin-top: 30px;">
 <button onclick="myFunction1()" name="stream" class="dropbtn">Year</button>
 <div id="myDropdown1"  class="dropdown-content">
    <a href="tpoViewStudC_1st.php">1st Year</a>
    <a href="tpoViewStudC_2nd.php">2nd Year </a>
    <a href="tpoViewStudC_3rd.php">3rd Year</a>
    <a href="tpoViewStudC_4th.php">4th Year</a>
  </div>
</div>
  <script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
} 
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}


</script>
</div>
<br>
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
    error_reporting(0);
	/*session_start();
	$username= $_SESSION['username'];
	echo "<br><br><br>";*/
	echo "<center><table class='container' >";
	echo "<tr>";
  echo "<th><center> Enrollment No. </center></th>";
	echo "<th><center> Name           </center></th>";
	echo "<th><center> Email          </center></th>";
	echo "<th><center> Department     </center></th>";
	echo "<th><center> Stream         </center></th>";
  //echo "<th><center> CGPA.          </center></th>";
  //echo "<th><center> Skills         </center></th>";
	echo "</tr>";

	$sql="SELECT * FROM student s WHERE stream='4th Year'";//profile p where s.prn=p.prn ";
	$result=$con->query($sql);		
	if($result-> num_rows > 0){
		while($row=mysqli_fetch_array($result) )
		{
			echo "<tr>";
			echo "<td><center>". $row['prn'] ."</center></td>";
			echo "<td><center>". $row['name'] ."</center></td>";
			echo "<td><center>". $row['email'] ."</center</td>";
			
			echo "<td><center>". $row['dept'] . "</center></td>";
			echo "<td><center>". $row['stream'] ."</center></td>";
			//echo "<td><center>". $row['cgpa'] ."</center></td>";
      //echo "<td><center>". $row['skills'] ."</center></td>";     
			echo "</tr>";	
		}
	}
	echo "</table></center>";
	//mysql_free_result($result);

?>



</div>
</body>
</html>