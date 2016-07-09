<!DOCTYPE html>
<html>
<head>
	<title>Rang De-Login</title>
</head>
<body>
  <!DOCTYPE html>
<html>
<head>
	<title>Sastra-Registration</title>
	<style type="text/css">
		.container
		{
			margin:auto;
		}
		.error
		{
			color:red;
		}
                input[type=text]
                {
                 border-
                }
	</style>
</head>
<body>
<?php
  $fname=$mail=$pass=$confirmpass=$age="";
  $fnameerr="";
  $lnamerr="";
  $mailerr="";
  $passerr="";
  $confirmerr="";
  $phoneerr="";
  if($_SERVER["REQUEST_METHOD"]== "POST") 
  {
  	 if(empty($_POST["fname"]))
    {
    	$fnameerr="First Name field required";
    }
    else
    {
      $fname = test_input($_POST["fname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
      {
      $nameerr = "Only letters and white space allowed"; 
      }
    }
    if(empty($_POST["lname"]))
    {
    	$fnameerr="Last Name field required";
    }
    else
    {
      $fname = test_input($_POST["fname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
      {
      $lnameerr = "Only letters and white space allowed"; 
      }
    }
    if(empty($_POST["mail"]))
    {
    	$mailerr="Mail field required";
    }
    else
    {
    $mail = test_input($_POST["mail"]);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailerr = "Invalid email format"; 
      }
    }
    if(empty($_POST["pass"]))
    {
    	$passerr="Password field required";
    }
    else
    {
    $pass = test_input($_POST["pass"]);
    }
    if(empty($_POST["confirmpass"]))
    {
    	$confirmerr="Confirm password field required";
    }
    else
    {
    $confirmpass = test_input($_POST["confirmpass"]);
    }
    if($confirmpass!=$pass)
    {
    	$confirmerr="Password and confirm password should be same";
    }
    if(empty($_POST["phoneno"]))
    {
    	$phoneerr="Phone Number field required";
    	 if (!preg_match("/^[0-9]*$/",$phoneno)) 
      {
      $lnameerr = "Only digits are allowed"; 
      }
    }
    else
    {
    $phoneerr = test_input($_POST["age"]);
    }
    if($nameerr == ""  && $ageerr == ""  && $mailerr== "" && $passerr=="" && $confirmerr=="")
    {
    	
    	$con=mysqli_connect("localhost","root","");
        if(!$con)
        {
         echo 'Could not connect to server';
        }
       if(!mysqli_select_db($con,'NGODatabase'))
       {
         echo "Database not selected";
       }
       $sql="SELECT email from nonvols where email='$mail' ";
       if($result=mysqli_query($con,$sql))
       {
          $num=mysqli_num_rows($result);
         if($num==1)
         {
          $mailerr="Email id already registered";
         }
       
      else
      {
        $sql1="INSERT INTO nonvols(email,password,name,age) Values('$mail','$pass','$fname','$age')";
        if(!mysqli_query($con,$sql1))
        {
         echo 'Not registered'; 
        }
      }
    }
}
  
}
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }
  
 ?>

  <h1>Registration Form</h1>
  <span class="error">*Required Field
  <div class="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <form method="post">
   <input type="text" name="fname" placeholder="Enter your First Name"/><span class="error"><span class="error">*<?php echo $fnameerr;?> </span></br></br>
   <input type="text" name="lname" placeholder="Enter your Last Name"/><span class="error"><span class="error">*<?php echo $lnameerr;?> </span></br></br>
   <input type="text" name="mail" placeholder="Enter your email id"/><span class="error"><span class="error">*<?php echo $mailerr;?></span></br></br>
   <input type="password" name="pass" placeholder="Enter a passowrd"/><span class="error"><span class="error">*<?php echo $passerr;?><span></br></br>
   <input type="password" name="confirmpass" placeholder="Confirm your password"/><span class="error">*<?php echo $confirmerr;?></span></br></br>
   <input type="text" name="phoneno" placeholder="Enter your Phone Number"/><span class="error"><span class="error">*<?php echo $phoneerr;?></span></br></br>
   <input type="submit" value="submit">
   <input type="button" value="Sign Up with Google+">
   <input type="button" value="Sign Up with Facebook">
   </form>
   </div>

</body>
</html>


</body>
</html>