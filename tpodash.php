<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <style>
                  * {
  box-sizing: border-box;
}
body{
  background: url(i31.jpg);
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
    </style>
    <title>TPO Dashboard</title>
    <link rel="stylesheet" href="studdashcss1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav style="background: #1b1b1b;height: 70px;">
    <img src="logo1.png" style="height: 70px;width: 200px">
      <div>
    <?php
        session_start(); 
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
        
       <div class="row">
    <div class="card">

      <img src="d4.jpg" style="height: 120px;width: 120px;margin-right: 700px">
      <a href="tpoViewReports.php" style="border-bottom: none;text-decoration: none"><h3 style="border-bottom: 00px;margin-top: -100px;font-size: 40px;margin-right:-300px;font-family: Comic Sans MS;font-weight: bold;color: black">T & P Reports
      <!---<i class='fas fa-angle-double-right' style='font-size:36px'></i>--->
      </h3></a>
      
    </div>
  </div>
    <div class="row" style="margin-top: 30px">
    <div class="card">
      <img src="img2.jpg" style="height: 120px;width: 120px;margin-left: 640px">
      <a href="regFaculty.php" style="border-bottom: none;text-decoration: none"><h3 style="border-bottom: 00px;margin-top: -100px;font-size: 40px;margin-left:-300px;font-family: Comic Sans MS;font-weight: bold;color: black">Add Department TPO
            <!---<i class='fas fa-angle-double-right' style='font-size:36px'></i>--->
      </h3></a>

    </div>
  </div>
</div>
  </body>
</html>



