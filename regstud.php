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
    if(isset($_POST['sbm']))
    {
        
            $pwd = $_POST['password'];
            //$str = md5($pwd);
            $sql="insert into student values('$_POST[name]','$_POST[clgname]','$_POST[email]','$_POST[prn]','$_POST[username]','$_POST[password]','$_POST[dept]','$_POST[stream]')";
            if($con->query($sql)==TRUE)
            {
                echo "Record Saved";
                header("Location: http://tpwebsite/studlogin.php");
            }
            else
            {
                echo "Error: ".$sql."<br>".$con->error;
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="regcss.css">
    <link rel="stylesheet" type="text/css" href="regstyle.css">
    <title>Student Registration</title>
    <style>
        .wrapper{
        box-shadow: -30px 30px 30px -10px  rgba( 40, 116, 166,0.5);
}
.input-data input:focus ~ label,
.input-data input:valid ~ label{
  color: #5DADE2;
}
.input-data .underline:before{
  background:  #5DADE2;
}

.button{
    background: #1B4F72;
    border: 1px solid #000;
    color: #fff;
    font-size: 18px;
    width: 200px;
    margin-top: 50px;
    margin-left: 130px;
    border-radius: 25px;
}

.button:hover{
    background: #AED6F1;
    color: #1D5061;
    font-weight: bold;
}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head> 
<body>
           
<nav>
  <img src="logo1.png" style="height: 70px;width: 200px" >
      <div class="logo"></div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn" class="in">
      <ul>
        <li><a href="dashboard.html">Home</a></li>
         <li><a href="choosesignup.html">Sign Up</a></li>
         <li><a href="chooselogin.html">Sign In</a></li>
          <li><a href="aboutus.html">About Us</a></li>
      </ul>
    </div>

  </nav><!---
   <img src="i2.jpg" style="width: 1263px;height: 690px">--->
 
    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>


  <div>
  <img src="img3.jpg" style="height: 550px;width: 550px;margin-left: 700px;margin-top: 50px;background: transparent">
</div>
<div class="wrapper">
<div>
 <h2 style="text-align: center;font-family: Gabriola;font-weight: bold ;font-size: 50px;margin-top: -20px"> Sign Up</h2>
   </div>             
             <!---   <form class="form" style="margin-left: 780px">--->
              <form method="POST">
                   <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="name" required>
                        <div class="underline"  style=""></div>
                        <label>Full Name</label>
                    </div>
                    <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="clgname" required>
                        <div class="underline"></div>
                        <label>Institute Name</label>
                    </div>
                    <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="email" required>
                        <div class="underline"></div>
                        <label>Email</label>
                        
                        <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="prn" required>
                        <div class="underline"></div>
                        <label>Enrollment No</label>
                    </div>
                    <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="username" required>
                        <div class="underline"></div>
                        <label>Username</label>
                     </div>
                    
                    </div>
                    <div style="margin-left: 280px;margin-top: -180px">

                    
                    <div class="input-data" style="margin-top: 20px;">
                        <input type="password" name="password" required>
                        <div class="underline"></div>
                        <label>Password</label>
                    </div>
                    <div class="input-data" style="margin-top: 20px;">
                        <input type="password" required>
                        <div class="underline"></div>
                        <label>Confirm Password</label>
                    </div>
                    <div class="input-data" style="margin-top: 20px">
                     <select name="dept" style="color: grey;">
                      <option>Department</option>
                      <option value="Computer">Computer</option>
                      <option value="Civil">Civil</option>
                      <option value="Electrical">Electrical</option>
                      <option value="IT">IT</option>
                      <option value="Mechanical">Mechanical</option>
                      
                     </select>
                        <div class="underline"></div>
                  </div>

                    
                  <div class="input-data" style="margin-top: 20px;">
                     <select name="stream" style="color: grey;">
                      <option>Year</option>
                       <option value="1st Year">1st Year</option>
                      <option value="2nd Year">2nd Year</option>
                      <option value="3rd Year">3rd Year</option>
                      <option value="4th Year">4th Year</option>
                      
                     </select>
                        <div class="underline"></div>
                  </div>
                </div>
                  <div> 
                    <input type="submit" class="button" name="sbm" value="Sign Up" style="margin-left: 160px;width: 200px;height: 49px;font-family: Gabriola;font-style: bold;font-size: 30px;margin-top: 80px;margin-bottom: 0px">
                </div>
              </form>
            </div>
       
     
    
</body>
</html>


