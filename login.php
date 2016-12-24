<html>
<head>
 <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/login_register.js"></script>
</head>
<?php
session_start();


$email= $_POST['email'];
$password=$_POST['password'];



//checking the validation of the form by checking whether email and password exists
if($email && $password){

    //connecting to the db
	$con=mysqli_connect("localhost","root","","eShop");
}
else
{
	//sending an error message
	header("Location:http://localhost/eshop/login1.php");

}
//checking that the email and password already exists in the db(the user had registered)
$sql=" SELECT * FROM users WHERE email='$email'";
$query= mysqli_query($con,$sql);

//count the num of rows retrieved to the query $query
$numrows= mysqli_num_rows($query);
if($numrows!=0){
	//code to login
	//fetching the row extracted from the query and putting the result in an array
	while($row= mysqli_fetch_assoc($query)){
		$dbemail=$row['email'];
		$dbpassword=$row['password'];
		$dbid=$row['id'];
	}
	  if($email==$dbemail && $password==$dbpassword){
		//setting the session by getting email
		$_SESSION['email']= $dbemail;
		$_SESSION['id']=$dbid;
		header("Location:http://localhost/eshop/profile.php");

		
	}
	elseif($email==$dbemail && $password!=$dbpassword){
		// echo "<script>alert('Incorrect Password')</script>";
	 header("Location:http://localhost/eshop/login1.php");


	}
	elseif($email!=$dbemail && $password==$dbpassword){
		header("Location:http://localhost/eshop/login1.php");

	}


	}
	else{
		header("Location:http://localhost/eshop/login1.php");

	}

	//check to see if they match


// else{
// 	die("The user doesnt exist");
// }



?>
</html>