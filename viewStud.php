<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <style>
                  * {
  box-sizing: border-box;
}
body{
  background: url(Sprinkle.svg);
  background-size: ;
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
margin-top: 150px;
width: 500px;
margin-left:240px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height: 150px;
  width: 800px;
}
.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
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
    </style>
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="studdashcss.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <h3 style="margin-top: -45px;color: white;margin-left: 900px "> <?php 
      session_start(); 
      error_reporting(0); 
      echo"<br><br>";
      //echo $_SESSION['username']; 
      echo"<br><br>";
      echo $_SESSION['name'] ."-"; 

?><img src="te.png" style='height: 60px; width: 60px; margin-top: -190; margin-right: 20px;border-radius: 100px;'>
</h3> 
<hr>
<div class="wrapper" style="margin-top: 20px">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Menu</div>
        <ul class="list-items">
          <li><a href="techdash.php"><i class="fas fa-home"></i>Dashboard<a></li>
          <li><a href="uploadnotice.php"><i class="fas fa-user"></i>Upload Notice</a></li>
          <li><a href="techlogout.php"><i class="fa fa-power-off"></i>Log Out</a></li>
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </ul>
      </nav>
    </div>

<div>
	<br><br><br><br>


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
	echo "<center><table border=3 height=200 width=998>";
	echo "<tr>";
	//echo "<th>Sr.No</th>";
	echo "<th>Name</th>";
	echo "<th>Institute Name</th>";
	echo "<th>Email</th>";
	echo "<th>Enrollment No.</th>";

	
	echo "<th>Department</th>";
	echo "<th>Stream</th>";
	echo "</tr>";

	$sql="SELECT * FROM student";
	$result=$con->query($sql);		
	$num=1;
	if($result-> num_rows > 0){
		while($row=mysqli_fetch_array($result) )
		{
			echo "<tr>";
	//		echo "<td>".$num."</td>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
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