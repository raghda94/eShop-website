<html>
<head>
<link href="styles/bootstrap.css" rel="stylesheet">
     <link href="styles/main1.css" rel="stylesheet">
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'> 

</head>
<body style="
    background-color: #66696e;
    background-image: url('images/edit.jpg');
">
  

  
    <nav class="navbar navbar-default" id="N1" style="
    background-image: url('images/nb.png');
">
      
      <h2>
      <span class="glyphicon glyphicon-shopping-cart
" aria-hidden="true"></span>
      
       My Shopping Cart
       </h2>	

    
    </nav>
     </div>
</body>



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
echo "<div id='box'><b>Your purchased items are:<b> " . $items  ."<br><div>";
echo "The Total price is "."$ " . $price;
}
}



?>
<div class="row" id="rr1">
<div class="col-md-6">
<?php
$con=mysqli_connect("localhost","root","","eShop");
$items='';
$price=0;

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
			$id=$row['product_id'];

			$title=$row['title'];
			$items = $title . "," . $items;
			$priceP=$row['price'];
			$quantity= $row['quantity'];
			$total= $quantity * $priceP;
			$price += $total;
			echo $title ." Click  Here to <a id='a2' href= 'updateq.php'><button id='e1'>
			Edit</button></a> or <a id='a2' href= 'remove.php?pro_id=$id'><button id='e1'>Remove</button></a> item<br>" ;
			





		}
		
		$countrows= $countrows -1;
		



}
// echo "The items are " . $items  ."<br>";
// echo "The Total price is " . $price;
}
}



?>
<a href='index.php'><button id="hm">
<span class="glyphicon glyphicon-arrow-left
" aria-hidden="true" id="ghm"></span>
Return to Homepage</button></a>
<a href='checkout.php'><button id="co">
<span class="glyphicon glyphicon-arrow-right
" aria-hidden="true" id="gco"></span>
Checkout</button></a>


</div>
