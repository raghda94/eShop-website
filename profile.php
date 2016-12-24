<html>
<head>
</head>
<body style="    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    color: brown;">
<?php
session_start();


//check if the user has logged in
//if this session has been created
if(!isset($_SESSION["email"])){
	echo"You must <a href='login1.php'>log in</a><br>";
	echo"Click <a href='index.php'>Here</a>to go to index page<br>";
	
	

}
else{

	$con=mysqli_connect("localhost","root","","eShop");
	$email=$_SESSION['email'];
    $sql=" SELECT * FROM users WHERE email='$email'";
    $query= mysqli_query($con,$sql);
     $numrows= mysqli_num_rows($query);
     if($numrows!=0){
      	while($row= mysqli_fetch_assoc($query)){
			$dbemail=$row['email'];
			$dbfname=$row['first_name'];
			$dblname=$row['last_name'];
				}
				if($dbemail == $_SESSION['email']){
					echo "Welcome ". $dbfname . $dblname . "! <br>";
			echo "You can logout <a href='logout.php'>Here</a><br>";
			echo "Click <a href='edit.php'>Here</a>to edit your profile<br>";
			echo"Click <a href='index.php'>Here</a>to return to homepage";
	


				




}
}
}




?>
</body>
</html>

