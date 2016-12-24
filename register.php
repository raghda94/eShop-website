<html>
<head>
<link href="styles/main1.css" rel="stylesheet">
</head>

<?php


$con= mysqli_connect("localhost","root","","eshop");
$cEmail="";
$cPassword="";
$ccPassword="";
 
 session_start();

//checking thar all required fields aren't empty

  
  
if(isset($_SESSION['email'])){
  echo"<div id='UUU'>You are already a user<br></div>";
  echo"<div id='arr'>Return <a id='dd'href='index.php'>Here to homepage</a></div>";

  
}



//checking if the form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password= $_POST['password'];
  $confirm_password = $_POST['confirmpassword'];
  $picture=$_POST['picture'];



	if($email== '' || $password== '' || $confirm_password==''){
  	header("Location:http://localhost/eshop/register.html");
    echo" Click <a href='index.php'>Here to return to homepage</a>";

  
  
  	exit();
  }
  if($password !=$confirm_password){
    header("Location:http://localhost/eshop/register.html");
  // 	echo "<script>alert('Paswords dont match enter again')</script>";
  //   echo "Register Again <a href='index.php'>Here</a>";
  // echo" Click <a href='index.php'>Here to return to homepage</a>";
  	

  }
  $check_email="SELECT * FROM users WHERE email='$email'";
 $run_query=$con->query($check_email);
//counting the num of rows in the db
if(mysqli_num_rows($run_query) > 0){
	echo"<script>alert('This email already exists')</script>";
	header("Location:http://localhost/eshop/register.html");
 
	exit();
}
if($email=='' || $password=='' || $confirm_password=='' ||mysqli_num_rows($run_query) > 0 || $password !=$confirm_password){

header("Location:http://localhost/eshop/register.html");


}
else{
	
	$query="INSERT INTO users(email,password,first_name,last_name,picture) VALUES('$email','$password','$first_name','$last_name','$picture')";

if(mysqli_query($con,$query)){
	echo "<script>alert('Registration Successful')</script>";
  echo" Click <a href='index.php'>Here to return to homepage</a>";
  echo" Click <a href='profile.php'>Here to go to your profile</a>";
  session_start();


$email= $_POST['email'];

  header('location: profile.php');
}


}

}
elseif(!isset($_SESSION['email'])){
  header("Location:http://localhost/eshop/register.html");
}
// else{
// 	echo"You haven't registered";
// 	echo "Register Again <a href='index.php'>Here</a> <br>";
//   echo" Click <a href='index.php'>Here to return to homepage</a>";
  



// }
//checking that all required fields aren't empty
// if($email == ''){
// 	//using javascript alert to echo a msg to the user
	

// 	echo "<script>alert('Please enter your email')</script>";
// 	exit();
// }
// if($password == ''){
// 	//using javascript alert to echo a msg to the user
	
// 	echo "<script>alert('Please enter your password')</script>";
// 	exit();
// }

// if($confirm_password == ''){
// 	//using javascript alert to echo a msg to the user


// 	echo "<script>alert('Please r-enter your password')</script>";
// 	exit();
// }

//checking if the registered email already exists





?>
</html>
