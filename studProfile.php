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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <style>
              body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: ;    
}
         
        .main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  right: 28px;
  width: 200px;
  margin-right: 400px;
  margin-top: 300px;
  margin-left: 300px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position:;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  height: 550px;
  width: 700px;
  margin-left: 270px;
  margin-top: 100px;
  background-color: white;
}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: white;

}

/* Full-width input fields */

input{
    margin: 20px 0;
    padding: 10px;
    background: transparent ;
    border: none;
    outline: none;
    color: #000;
    font-family: 'Raleway', sans-serif;
}

.username, .password, .fullname, .email, .list{
    border-bottom: 1px solid #000;
    border-bottom-width:
    
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: black;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    </style>

    <title>Student Dashboard</title>
    <link rel="stylesheet" href="studdashcss.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <nav style="background: #1b1b1b;height: 80px;margin-top: -20px;">
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

<div>
    <?php
      $sql="SELECT * FROM student s, profile p where s.prn=p.prn AND s.prn='$prn' AND p.prn='$prn' ";
      $result=$con->query($sql);    
      $num=1;
      if($result-> num_rows > 0)
      {
        while($row=mysqli_fetch_array($result) )
          {  
            ?>
          <div class="row gutters-sm" style="margin-top: 40px">
            
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                   <img src='<?php echo "image/".$row["proimg"];?>' alt='Admin' height="150" width="150">
                    <div class="mt-3">
                      <?php $_SESSION['proimg']=$row['proimg']?>
                      <h4><?php echo $_SESSION['name'];?></h4>
                      <p class="text-secondary mb-1">We have been taught a lot of things. But the practical application
                            of my knowledge will help me know how much have I actually learned.</p>
                       </div>
                  </div>
                </div>
              </div>

            <div class="card mt-3">
                <ul class="list-group list-group-flush" style="margin-left: 10px">

            <li> <a href="<?php echo $row['link'];?>"><i class="fab fa-linkedin" style="font-size: 35px;color: blue"></i><h6 style="margin-left: 260px;margin-top: -25px;color: black"></h6></a><h6 style="margin-left: 40px;margin-top: -30px">Linked In</h6></li>
            <hr>
            <li><a href="<?php echo $row['git'];?>"><i class="fab fa-github" style="font-size: 35px;color: black"><h6 style="margin-left: 260px;margin-top: -25px;color: black"></h6></i></a><h6 style="margin-left: 40px;margin-top: -30px">Github</h6></li>
            <hr>
            <li style="height: 50px"><a href="<?php echo $row['hacker'];?>"><i class="fab fa-hackerrank" style="font-size: 35px;color: green"><h6 style="margin-left: 260px;margin-top: -25px;color: black"></h6></i></a><h6 style="margin-left: 40px;margin-top: -30px;color: black">HackerRank</h6></li>

          
               </ul>
              </div>
            </div>
             
             <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Enrollment No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $row['prn'];?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['name'];?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['email'];?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Stream</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['stream'];?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CGPA</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['cgpa'];?>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3" style="font-size: 20px">Skills</h6>
                      <P><?php echo $row['skills'];?> </P>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3" style="font-size: 20px">Projects</h6>
                      <p><?php echo $row['project'];?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
         }
      } 
  ?> 

       
    </div>
    </div>

                      <div style="margin-left: 660px;margin-top:-10px ;" >
                        <button class="btn btn-info" onclick="openForm()">Edit</button>
                        </div>
                     
      <div class="row gutters-sm" >
       <div class="form-popup" id="myForm" style="margin-top: -550px">

    <h4 style="margin-left: 260px;width: 500px;font-size: 25px;margin-top: 30px">Update Profile</h4>
  <form action="" class="form-container" method="POST" enctype="multipart/form-data"  style="margin-left: 120px;margin-top: -30px">
    
  
<div style="margin-top: 20px;">
    <input type="text" class="fullname" name="cgpa"  placeholder="CGPA" required>
    <input type="text" class="fullname" name="skills" placeholder="Skills" required>
    <input type="text" class="fullname" name="project" placeholder="Projects" required>
    <input type="text" class="fullname" name="link" placeholder="LinkedIn Link" required>
   
</div>
<div style="margin-left: 250px;margin-top: -340px">
    <input type="text" class="fullname" name="git" placeholder="Github Link" required>
    <input type="text" class="fullname" name="hacker" placeholder="HackerRank Link" required>
    Profile:<input type="file" name="proimg" style="font-size: 15px" required>
</div>


<div style="margin-top: 50px;margin-left: 100px">
    <button type="submit" class="btn" name="update" style="width: 240px">Update</button>
    <button type="button" class="btn cancel" onclick="closeForm()"  style="width: 240px">Close</button>
</div>
  </form>
</div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
 
  
      
    <div class="wrapper" style="margin-top: -560px;position: fixed;">
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

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript"></script></div>
</body>
</html>
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
    
if (isset($_POST['update'])) 
{
  $cgpa=$_POST['cgpa'];
  $skills=$_POST['skills'];
  $project=$_POST['project'];
  $link=$_POST['link'];
  $git=$_POST['git'];
  $hacker=$_POST['hacker'];
  $proimg=$_FILES['proimg']['name'];
  $prn=$_SESSION['prn'];

  $query="INSERT INTO profile(prn,cgpa,skills,project,link,git,hacker,proimg) values('$prn','$cgpa','$skills','$project','$link','$git','$hacker','$proimg')";
  $query_run=mysqli_query($con,$query);

    if($query_run==TRUE) 
    {
      move_uploaded_file($_FILES['proimg']['tmp_name'], "image/".$_FILES['proimg']['name']); 
      header("Location: studProfile.php");
    }
    else{
      //echo "Image not Stored "; 
      header("Location: studProfile.php");
    }
}

?>


