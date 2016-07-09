<?php
	//Start session
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
	session_start();
    
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = md5($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	//echo $errflag;
	//If there are input validations, redirect back to the login form
	if($errflag) {
		/*$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		
		header("Location: ../rangde/loginpage.php");
		exit();*/
	}
 
	//Create query
	$qry="SELECT * FROM investors WHERE USERNAME='$username' AND PASSWRD='$password'";
	//echo $username;
	//echo $password;
	//echo $qry;
	$result=mysqli_query($con,$qry);
 
	//Check whether the query was successful or not
	//echo $result;
	if($result){
		
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['ID'];
			$_SESSION['SESS_USERNAME'] = $member['USERNAME'];
			$_SESSION['SESS_PASSWORD'] = $member['PASSWRD'];
            $_SESSION['SESS_FNAME'] = $member['FIRST_NAME'];
            $_SESSION['SESS_LNAME'] = $member['LAST_NAME'];
            $_SESSION['SESS_ADDRESS'] = $member['ADDRESS'];
            $_SESSION['SESS_PHONE'] = $member['PHONE'];
           
			session_write_close();
            if(isset($_SESSION['SESS_MEMBER_ID'])){
				//echo "im here";
				
                header('Location: ../rangde/dashboard.php');
			    exit();
            }
            
			
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				
				header('Location: ../rangde/loginpage.php');
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>