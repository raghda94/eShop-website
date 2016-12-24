<html>
<head>
<link href="styles/main1.css" rel="stylesheet">
</head>
<body style="    font-family: 'Open Sans', sans-serif;
    font-size: 19px;
    margin-left: 18px;
    color: cornflowerblue;">

<?php

$con=mysqli_connect("localhost","root","","eShop");
$items='';
$price=0;
session_start();
           $con=mysqli_connect("localhost","root","","eShop");
           
           if( !isset($_SESSION['email'])) {
           	
       echo "Login First";
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
			$title=$row['title'];
			$items = $title . "," . $items;
			$priceP=$row['price'];
			$quantity= $row['quantity'];
			$total= $quantity * $priceP;
			$price += $total;


		}
		
		$countrows= $countrows -1;
		



}
echo "<div id='box3'>Your selected items are: " . $items  ."<br><div>";
echo "The Total price is "."$ " . $price;
}
}

?>
<div class="row" >
<div class="col-md-6">
<?php
$con=mysqli_connect("localhost","root","","eShop");
$items='';
$price=0;

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
			$title=$row['title'];
			$items = $title . "," . $items;
			$priceP=$row['price'];
			$quantity= $row['quantity'];
			$total= $quantity * $priceP;
			$price += $total;
			
			




		}
		
		$countrows= $countrows -1;
		



}
// echo "The items are " . $items  ."<br>";
// echo "The Total price is " . $price;
}
}


?>












<a href='index.php'><button id="hm3">
<span class="glyphicon glyphicon-arrow-left
" aria-hidden="true" id="ghm"></span>
Return to Homepage</button></a>
<a href='purchase.php'><button id="co3">
<span class="glyphicon glyphicon-arrow-right
" aria-hidden="true" id="gco"></span>
Checkout</button></a>



</div>