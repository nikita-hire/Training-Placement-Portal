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


	if (isset($_POST['clgcode']) && isset($_POST['password'])) {

		function validate($data)
		{
			$data= trim($data);
			$data= stripslashes($data);
			$data= htmlspecialchars($data);
			return $data;
		}
		$clgcode = validate($_POST['clgcode']);
		$password = validate($_POST['password']);

		if(empty($clgcode)){
			header("Location:login.php?error= Institute Code is required");
			exit();
		}
		else if (empty($password)) {
			header("Location:login.php?error= Password is required");
			exit();			
		}
		else{

			$sql="SELECT * FROM tpo WHERE clgcode='$clgcode' AND password='$password'";
			$result= mysqli_query($con,$sql);
			if (mysqli_num_rows($result)==1) {
				$row=mysqli_fetch_assoc($result);
				if($row['clgcode']==$clgcode && $row['password']==$password)
				{
					$_SESSION['clgcode']=$row['clgcode'];
					$_SESSION['password']=$row['password'];
					$_SESSION['clgname']=$row['clgname'];

					header("Location:tpodash.php");
					exit();
					
				}else{
					header("Location: login.php?error=Incorrect Code or password");
					exit();
				}
			}
			else{
				header("Location: login.php?error=Incorrect code or password");
					exit();
			}
		}
	}else{
		header("location:loginclg.php");
		exit();
	}

?>