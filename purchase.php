<html>
<head>
</head>
<body style="font-family: 'Open Sans', sans-serif;
    font-size: 19px;
    color: brown;">

<?php

session_start();
$con=mysqli_connect("localhost","root","","eShop");
           
           if( !isset($_SESSION['email'])) {
           	
       echo "Please <a href='login1.php'>login</a><br>";
   }
   else{
   	$email=$_SESSION['email'];
   	$query1="SELECT * FROM users WHERE email='$email'";
   	$run_query=$con->query($query1);
   	if(mysqli_num_rows($run_query) >0 ){
   		while($row= mysqli_fetch_assoc($run_query)){
			$dbemail=$row['email'];
			$dbid=$row['id'];
		}
	}
		


$query2="SELECT * FROM cart WHERE user_id='$dbid'";
$run_query2=$con->query($query2);




if(mysqli_num_rows($run_query2) >0 ){
	$countrows= mysqli_num_rows($run_query2);
	
	while($countrows>0){
		while($row= mysqli_fetch_assoc($run_query2)){
			$pid=$row['product_id'];
			$uid=$row['user_id'];

			$query0="SELECT * FROM products WHERE id='$pid'";
			$run_query0=$con->query($query0);
			$countrows1= mysqli_num_rows($run_query0);
			if(mysqli_num_rows($run_query0) >0){
			while($row= mysqli_fetch_assoc($run_query0)){
				$pro_title=$row['title'];
				$pro_price=$row['price'];
			$query9="SELECT * FROM purchases WHERE pro_id='$pid' and user_id='$uid'";
			$run_query9=$con->query($query9);
			if(mysqli_num_rows($run_query9) >0){

				$queryU="UPDATE purchases SET
      quantity = quantity + 1
    WHERE pro_id = $pid";

     $run_queryU=$con->query($queryU);
     if($con->query($queryU) === TRUE){
     	echo"Quantity updated";
     }
     else{
     	echo "NO";
     }
 }

     else{



			$query4= "INSERT INTO purchases(user_id,pro_id,product_title,product_price,quantity) VALUES('$uid','$pid','$pro_title','$pro_price','1')";
			$run_query4=$con->query($query4);
			if($con->query($query4) === TRUE){

				$query11="SELECT * FROM products WHERE id='$pid'";
				$run_query11=$con->query($query11);
				if($con->query($query11) === TRUE){
					
				
				


	echo "<script>alert('Product Has been purchased')</script>";
}
}
}
}


$query12="UPDATE products SET count=count-1
					WHERE id='$pid'";
					$run_queryU=$con->query($query12);
					if($con->query($query12) === TRUE){
     	echo"Count updated";
     }


			$query3="DELETE FROM cart WHERE user_id='$dbid'";
			$run_query3=$con->query($query3);
			if($con->query($query3) === TRUE){
				
header('location: index.php');

	echo "<script>alert('You have successfully purchased these items')</script>";

}
else{
	echo"NO";
}



	}
	$countrows--;
}
}

}
}
?>
<a href='index.php'><button style="    margin-top: 7px;
    border: 0px;
    width: 149px;
    height: 33px;
    border-radius: 3px;
    color: darkgreen;">Return to Homepage</button></a>
</body>
</html>
