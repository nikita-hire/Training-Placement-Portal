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
            $sql="insert into faculty values('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[clgname]','$_POST[password]','$_POST[dept]')";
            if($con->query($sql)==TRUE)
            {
                echo "Record Saved";
                header("Location: tpodash.php");
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
    <link rel="stylesheet" type="text/css" href="regcss1.css">
    <link rel="stylesheet" type="text/css" href="studdashcss1.css">
    <title>Add Department TPO</title>
    <style>

                  * {
  box-sizing: border-box;
}
body{
  background: url(i39.jpg);
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
        margin-left: 260px;
        background-color: #f1f1f1;
         background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0,0,0 , 0.5); /* Black background with 0.5 opacity 241, 148, 138  */
}
 .wrapper .input-data option {
     
        background-color: #f1f1f1;
         background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0,0,0 , 0.5); /* Black background with 0.5 opacity 241, 148, 138  */
}

.input-data input:focus ~ label,
.input-data input:valid ~ label{
  color: #FDFEFE;
}
.input-data .underline:before{
  background:  #FDFEFE;
}
.wrapper .input-data label{
  color: #EAFAF1;
}

 #sidebar .list-items li:hover{
   color: cyan;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: 0 0 5px #33ffff,
               0 0 10px #66ffff;
}

.button{
    background: #1C2833;
    border: 1px solid #000;
    color: #fff;
    font-size: 18px;
    width: 200px;
    margin-top: 50px;
    margin-left: 130px;
    border-radius: 25px;
}



.button:hover{
    background: #AEB6BF;
    color: #1D5061;
    font-weight: bold;
}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head> 
<body>
    <nav style="background: #1b1b1b;height: 70px;">
    <img src="logo1.png" style="height: 70px;width: 200px">
   <div>
    <?php
        session_start(); 
      error_reporting(0);?><h3 style="margin-top: -50px;color: white;margin-left: 1250px;font-size:20px ;"><?php
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
  
<div class="wrapper">
<div>
 <h2 style="text-align: center;font-family: Gabriola;font-weight: bold ;font-size: 50px;margin-top: -10px;color:white">Add Department TPO</h2>
   </div>  
          
              <form style="margin-top: 20px" method="POST">
                 
                   <div class="input-data" style="margin-top: 10px;">
                        <input type="text" name="name" required>
                        <div class="underline"  style=""></div>
                        <label>Full Name</label>
                    </div>
                    <div class="input-data" style="margin-top: 30px;">
                      <input type="text" name="username" required>
                        <div class="underline"></div>
                        <label>Username</label>

                    </div>
                    <div class="input-data" style="margin-top: 30px;">
                        
                        <input type="text" name="email" required>
                        <div class="underline"></div>
                        <label>Email</label>
                    </div>
                    <div class="input-data" style="margin-top: 30px;">
                     <input type="text" name="phone" required>
                        <div class="underline"></div>
                        <label>Contact No</label>
                      </div>
                       
                    <div style="margin-left: 300px;margin-top: -278px">
                      
                      <div class="input-data" style="margin-top: 30px;">
                        <input type="text" name="clgname" required>
                        <div class="underline"></div>
                        <label>Institute Name</label>
                      </div>
                      
                    <div class="input-data" style="margin-top: 20px;">
                        <input type="password" name="password" required>
                        <div class="underline"></div>
                        <label>Password</label>
                    </div>
                   <div class="input-data" style="margin-top: 30px;">
                      <input type="password" required>
                        <div class="underline"></div>
                        <label>Confirm Password</label>
                    </div>
                    <div class="input-data" style="margin-top: 30px;">    
                    <select  name="dept" style="color:  #EAFAF1;">
                      <option>Department</option>
                      <option value="Computer">Computer</option>
                      <option value="Civil">Civil</option>
                      <option value="Electrical">Electrical</option>
                      <option value="IT">IT</option>
                      <option value="Mechanical">Mechanical</option>
                      
                     </select>
                    </div>
                    </div>
                   <input type="submit" class="button" name="sbm" value="ADD" style="margin-left: 160px;width: 200px;height: 49px;font-family: Gabriola;font-style: bold;font-size: 30px;margin-top: 20px">
                    
               </form>
            </div>
     
    
</body>
</html>


