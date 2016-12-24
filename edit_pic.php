<?php
session_start();
           $con=mysqli_connect("localhost","root","","eShop");
           if($_SERVER["REQUEST_METHOD"] == "POST"){
	       	
	       	if($_SESSION['email']){
           	$email=$_SESSION['email'];
           	$sql=" SELECT * FROM users WHERE email='$email'";
              $query= mysqli_query($con,$sql);
              $numrows= mysqli_num_rows($query);
              if($numrows!=0){
              	while($row= mysqli_fetch_assoc($query)){
					$dbemail=$row['email'];
					$dbpassword=$row['password'];
					$dbid=$row['id'];
					$dbpic=$row['picture'];
					
				}
			}
		}
		$pic= $_POST['picture'];
	       	$fnquery= "UPDATE users  SET picture='$pic' WHERE id= $dbid";
	       	if(mysqli_query($con,$fnquery)){
				echo "<script>alert('Picture Has Been Changed')</script>";

			}
	       }
?>
<a href='profile.php'><button type="button">Profile</button></a>