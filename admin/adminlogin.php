<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)) {
		header("Location: index.html?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.html?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: admindashboard.php");
		        exit();
            }else{
				header("Location: index.html?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.html?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.html");
	exit();
}