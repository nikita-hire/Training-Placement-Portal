<?php
	session_start();	
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password =""; /* Password */
    $dbname = "placement"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);
    if (!$con) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    error_reporting(0);


	if (isset($_POST['username']) && isset($_POST['password'])) {

		function validate($data)
		{
			$data= trim($data);
			$data= stripslashes($data);
			$data= htmlspecialchars($data);
			return $data;
		}
		$username = validate($_POST['username']);
		$password = validate($_POST['password']);

		if(empty($username)){
			header("Location:login.php?error= Username is required");
			exit();
		}
		else if (empty($password)) {
			header("Location:login.php?error= Password is required");
			exit();			
		}
		else{

			$sql="SELECT * FROM faculty WHERE username='$username' AND password='$password'";
			$result= mysqli_query($con,$sql);
			if (mysqli_num_rows($result)==1) {
				$row=mysqli_fetch_assoc($result);
				if($row['username']==$username && $row['password']==$password)
				{
					$_SESSION['username']=$row['username'];
					$_SESSION['password']=$row['password'];
					$_SESSION['name']=$row['name'];

					header("Location:techdash.php");
					exit();
					
				}else{
					header("Location: login.php?error=Incorrect Username or password");
					exit();
				}
			}
			else{
				header("Location: login.php?error=Incorrect Username or password");
					exit();
			}
		}
	}else{
		header("location:techlogin.php");
		exit();
	}

?>