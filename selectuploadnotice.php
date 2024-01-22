<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="regcss1.css">
    <link rel="stylesheet" type="text/css" href="studdashcss1.css">
    <title>Upload Notice</title>
    <style>

                  * {
  box-sizing: border-box;
}
body{
  background: url(i29.jpg);
  background-size: cover;
}

        hr{
           border: none;
            height: 70px;
            background: #404040;
            margin-top: -70px;
        }
        .wrapper{
        box-shadow: -30px 30px 30px -10px  rgba( 100, 30, 22 ,0.5);
}
.input-data input:focus ~ label,
.input-data input:valid ~ label{
  color: #B03A2E;
}
.input-data .underline:before{
  background:  #B03A2E;
}

 #sidebar .list-items li:hover{
   color: cyan;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
}

.button{
    background: #440636 ;
    border: 1px solid #000;
    color: #fff;
    font-size: 18px;
    width: 200px;
    margin-top: 50px;
    margin-left: 130px;
    border-radius: 25px;
}



.button:hover{
    background: #D8B2D0 ;
    color: #1D5061;
    font-weight: bold;
}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
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
          <!--<li><a href="uploadnotice.php"><i class="fas fa-user"></i>Upload Notice</a></li>-->
          <li><a href="studsection.php"></i>View Students</a></li>
          <li><a href="techlogout.php"></i>Log Out</a></li>
             
        </ul>
      </nav>
    </div>
  
<div class="wrapper">
<div>
 <h2 style="text-align: center;font-family: Gabriola;font-weight: bold ;font-size: 50px;margin-top: 0px;color:black">Upload Notice</h2>
   </div>             
              <form style="margin-top: 10px" action="" method="POST" enctype="multipart/form-data" onsubmit="alert('Successfully uploaded!!');">
                   <div class="input-data" style="margin-top: 10px;">
                      <select name="section" style="color: #320B29;">
                      <option>Section</option>
                       <option value="Competitive Exam">Competition</option>
                      <option value="Trainings">Training</option>
                      <option value="Internships">Internship</option>
                     </select>
                        <div class="underline"></div>
                  </div>
                   <div class="input-data" style="margin-top: 60px;">
                           <input type="date" name="date" value="Date" required>
                        <div class="underline"></div>
                        
                    </div>
                    <div class="input-data" style="margin-top: 60px;">
                         <input type="text" name="company" required>
                        <div class="underline"></div>
                        <label>Heading</label>
                    </div>

                    <div style="margin-left: 300px;margin-top: -260px">
                     <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="description" required>
                        <div class="underline"></div>
                        <label>Description</label>
                    </div>
                   <div style="margin-left: -0px">
                      <div class="input-data" style="margin-top: 60px;">
                     <select name="category" style="color: #320B29;">
                      <option>Year</option>
                      <option value="1st Year">1st Year</option>
                      <option value="2nd Year">2nd Year</option>
                      <option value="3rd Year">3rd Year</option>
                      <option value="4th Year">4th Year</option>
                      <option value="To All">To All</option>

                     </select>
                        <div class="underline"></div>
                  </div>
                    </div>
                  
                  
                      <div style="margin-left: 0px">
                      <div class="input-data" style="margin-top: 20px;">
                      <label>Attachment</label>
                         <input type="file" name="file" style="margin-top: 40px">
                      </div>
                    </div>
                  

                  <input type="submit" class="button" name="upload"   value="Upload" style="margin-left: -140px;width: 200px;height: 49px;font-family: Gabriola;font-style: bold;font-size: 30px;margin-top: 55px">
               </form>
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

//error_reporting(0);
if (isset($_POST['upload'])) 
{
  $section=$_POST['section'];
  $date=$_POST['date'];
  $company=$_POST['company'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $file=$_FILES['file']['name'];
  //$file $_FILES['file']['name'];
  //$file_loc = $_FILES['file']['tmp_name'];
  //$file_size = $_FILES['file']['size'];
  //$file_type = $_FILES['file']['type'];
  $folder="uploads/";
  $name=$_SESSION['name'];

  $query="INSERT INTO uploadattach(section,date,company,description,category,file) values('$section','$date','$company','$description','$category','$file')";
  $query_run=mysqli_query($con,$query);

    if($query_run==TRUE) 
    {
      move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']); 
      
      header("Location: techdash.php");
    }
    else{
      //echo "Image not Stored "; 
      header("Location: uploadnotice.php");
    }
}

?> 

                  