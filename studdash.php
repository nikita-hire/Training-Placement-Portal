<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <style>
    * {
           user-select: none;
          box-sizing: border-box;
          border-bottom: 00px;

}
body{
  background: url("i6.jpg");
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

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;
margin-top: 110px;
width: 500px;
margin-left:350px;
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
    background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(241, 148, 138 , 0.4); /* Black background with 0.5 opacity 241, 148, 138  */
  color: #f1f1f1;
}
.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(155, 47, 155  ,0.25), 
    -5px -5px 30px 15px rgba(218, 154, 218 ,0.22);

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
    <title>Student Dashboard</title>
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
      <div class="row">
    <div class="card">

      <img src="i9.jpg" style="height: 120px;width: 120px;margin-right: 700px">
      <a href="viewTrainings.php" style="border-bottom: none;text-decoration: none"><h3 style="border-bottom: 00px;margin-top: -100px;font-size: 50px;margin-right:-300px;font-family: Comic Sans MS;font-weight: bold;color: black">Training</h3>
      <!---<i class='fas fa-angle-double-right' style='font-size:36px'></i>--->
      </a>
      
    </div>
  </div>
    <div class="row" style="margin-top: 30px">
    <div class="card">
      <img src="img2.jpg" style="height: 120px;width: 120px;margin-left: 640px">
      <a href="ViewCompetitive.php" style="border-bottom: none;text-decoration: none"><h3 style="margin-top: -100px;font-size: 50px;margin-left:-300px;font-family: Comic Sans MS;font-weight: bold;border-bottom: 00px;color: black">Competition
             <!---<i class='fas fa-angle-double-right' style='font-size:36px'></i>-->
      </h3></a>

    </div>
  </div>
    <div class="row" style="margin-top: 30px">
    <div class="card">
      <img src="d12.jpg" style="height: 120px;width: 120px;margin-right: 700px">
      <a href="viewInternship.php" style="border-bottom: none;text-decoration: none"><h3 style="margin-top: -100px;font-size: 50px;margin-right:-300px;font-family: Comic Sans MS;font-weight: bold;border-bottom: 00px;color: black">Internship
        <!---<i class='fas fa-angle-double-right' style='font-size:36px'></i>--->
      </h3></a>
    </div>
  </div>

</div>

  </body>
</html>

<!---

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
</style>
</head>
<body>

<h2>Responsive Image with Transparent Text</h2>

<div class="container">
  <img src="/w3images/notebook.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
</div>

</body>
</html>
--->