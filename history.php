
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body style="    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 21px;">
<?php
session_start();
$result1="";
$result2=0;
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


   $query7="SELECT * FROM purchases WHERE user_id='$dbid'";
   $run_query=$con->query($query7);
   if(mysqli_num_rows($run_query) >0 ){
	$countrows= mysqli_num_rows($run_query);

	while($countrows>0){

		while($row= mysqli_fetch_assoc($run_query)){
			$title=$row['product_title'];
			$price=$row['product_price'];
			$quantity=$row['quantity'];
			$total=$price * $quantity;

			$result1 = $result1 . "," . $title;
			$result2+= $price;
			


	}

	$countrows--;


}
echo "You have purchased these items: " . $result1. "<br>" ;
			echo"Their total price is: " . "$" . $result2. "<br>";
}
}


?>

<a href="index.php"><button style="    height: 31px;
    border: 0px;
    border-radius: 3px;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    color: white;
    background-color: black;">Return to Homepage</button></a>
</body>
</html>