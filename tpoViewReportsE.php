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
  background: url(i33.jpg);
  background-size: cover;
}

        hr{
           border: none;
            height: 70px;
            background: #404040;
            margin-top: -70px;
        }

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;
margin-top: 180px;
width: 500px;
margin-left:380px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

      #sidebar .list-items li:hover{
   color: cyan;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
}



/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height: 150px;
  width: 800px;
   background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(85, 155, 151, 0.4); /* Black background with 0.5 opacity 241, 148, 138  */
  color: #f1f1f1;
}
.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(58, 142, 155,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);

}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

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
    <title>T&P Reports</title>
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
   <h4 style="margin-top: 50px;font-family: Gabriola;font-weight: bold;font-size: 70px;color:black;margin-left: 300px">Electrical-T&P Reports</h4>
</div>
  <div class="dropdown" style="margin-left: 1100px;margin-top: 30px;">

 <button onclick="myFunction1()" name="stream" class="dropbtn">Departments</button>
 
 <div id="myDropdown1"  class="dropdown-content">
    <a href="tpoViewReports.php">Computer</a>
    <a href="tpoViewReportsM.php">Mechanical</a>
    <a href="tpoViewReportsCiv.php">Civil</a>
    <a href="tpoViewReportsI.php">IT</a>
    <a href="tpoViewReportsE.php">Electrical</a>
  </div>
</div>
  <script>
  function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

function filterFunction1() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown1");
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
</script>
  <div><br>
<?php
    $sql="SELECT * FROM historynotice1 ORDER By prn DESC";
    echo "<center><table class='container'>";
    echo "<tr>";
    echo "<th><center>ENROLLMENT NO.</center></th>";
    echo "<th><center>NAME</center></th>";
    echo "<th><center>SECTION</center></th>";
    echo "<th><center>COMPANY NAME</center></th>";
    echo "<th><center>Applied Date & Time</center></th>";
    echo "</tr>";
  
    $result=$con->query($sql);    
    $num=1;
    if($result-> num_rows > 0)
    {
      while($row=mysqli_fetch_array($result))
      {   
         echo "<tr>";
         echo "<td><center>$row[1]</center></td>";
         echo "<td><center>$row[2]</center></td>";
         echo "<td><center>$row[3]</center></td>";
         echo "<td><center>$row[4]</center></td>";
         echo "<td><center>$row[5]</center></td>";
       echo "</tr>";
      }
    }   
    echo "</table></center>";
?>

</div>
</body>
</html>

