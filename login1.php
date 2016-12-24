<html>
<head>
<link href="styles/bootstrap.css" rel="stylesheet">
<link href="styles/main1.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/login_register.js"></script>
</head>
<?php
session_start();

if(isset($_SESSION['email'])){
	header("Location:http://localhost/eshop/profile.php");
}

?>




<head>
<link href="styles/bootstrap.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:700|Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:800|Yanone+Kaffeesatz|Ubuntu:500' rel='stylesheet' type='text/css'>
</head>
<body style="
    background-image: url('images/bg3.jpg');
">




<form action='login.php' method='POST' id="Flogin">
<h1 id="HL">Login</h1>
<label id="lemail">Email:</label>
<input type="email" name="email" id="EIL">
<label id="lpassword">Password:</label>
<input type='password' name='password' id="PIL">
<input type='checkbox' name='checkbox' id="CK"><p id="RME">Remember Me<p>
<input type="submit" name='submit' value='login' id="SL"><br>

<?php

	     $cEmail="";
		$cPassword="";
		$ccPassword="";
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if($email == ''){
				$cEmail="Email Required";
			}
			if($password == ''){
				$cPassword="Password Required";
			}
			if($confirm_password == ''){
				$ccPassword="Confirm Your Password";
			}




		}
		
	     ?>
	     

	     

</form>
<a href="index.php"><button style="    margin-left: 33px;
    width: 153px;
    padding-left: 85px;
    height: 34px;
    border: 0px;
    border-radius: 4px;
    margin-top: -394px;">
    <span class="glyphicon glyphicon-arrow-left
" aria-hidden="true" id="ghm"></span>
    Back to Homepage</button></a>
</body>
</html>