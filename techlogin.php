<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="regstyle.css">
    <title>Teacher SignIn</title>
    <style>
        .wrapper{
        box-shadow: 20px 20px 30px rgba( 100, 30, 22 ,0.5);
}
.input-data input:focus ~ label,
.input-data input:valid ~ label{
  color: #922B21;
}
.input-data .underline:before{
  background: #922B21 ;
}

.button{
    background: #3B0B0B ;
    border: 1px solid #000;
    color: #fff;
    font-size: 18px;
    width: 200px;
    margin-top: 50px;
    margin-left: 130px;
    border-radius: 25px;
}

.button:hover{
    background:  #F5A9A9 ;
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
  <img src="d8.jpg" style="height: 600px;width: 700px;margin-left: 10px;margin-top: 30px;background: transparent">
</div>
<div class="wrapper">
<div>
 <h2 style="text-align: center;font-family: Gabriola;font-weight: bold ;font-size: 50px;margin-top: -10px"> Sign In</h2>
   </div>             
                <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
          <?php } ?>
          
             <form action="techloginpart2.php" method="POST" >
                   <div class="input-data" style="margin-top: 20px;">
                        <input type="text" name="username" required>
                        <div class="underline"></div>
                        <label>Username</label>
                    </div>
                    <div class="input-data" style="margin-top: 40px;">
                        <input type="password" name="password" required>
                        <div class="underline"></div>
                        <label>Password</label>
                     </div>
                    <input type="submit" class="button" name="sbm" value="Sign In" style="margin-left: 120px;width: 140px;height: 40px;font-family: Gabriola;font-weight: bold;font-size: 25px">
               </form>
            </div>
</body>
</html>