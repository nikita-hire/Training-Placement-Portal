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
    <title>Student Information</title>
    <link rel="stylesheet" href="studdashcss1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    
   <div>
     <img src="s2.png" style="height: 50px;width: 50px;margin-top: 10px;border-radius: 30px;margin-left: 1200px ">
      <hr>
      <h3 style="margin-top: -45px;color: white;margin-left: 990px "> <?php 
      session_start(); 
      error_reporting(0); 
      //echo $_SESSION['username']; 
      echo $_SESSION['name'] ."-"; ?></h3> 
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
          <li><a href="techdash.php"><i class="fas fa-home"></i>Dashboard<a></li>
          <li><a href="uploadnotice.php"><i class="fas fa-user"></i>Upload Notice</a></li>
          <li><a href="studsection.php"><i class="fa fa-power-off"></i>View Students</a></li>
          <li><a href="techlogout.php"><i class="fa fa-power-off"></i>Log Out</a></li>
          
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