
<html>
<head>
<link href="styles/main1.css" rel="stylesheet">
</head>

<?php
$con=mysqli_connect("localhost","root","","eShop");


           session_start();
           $con=mysqli_connect("localhost","root","","eShop");
           
           if( isset($_SESSION['email'])) {
           	$email=$_SESSION['email'];
       
       $sql=" SELECT * FROM users WHERE email='$email'";
    $query= mysqli_query($con,$sql);
     $numrows= mysqli_num_rows($query);
     if($numrows!=0){
      	while($row= mysqli_fetch_assoc($query)){
			$dbemail=$row['email'];
			$dbid=$row['id'];
				}
			}
    

       
   
   if($_SERVER["REQUEST_METHOD"] == "GET"){



$id=$_GET['pro_id'];
$queryR="SELECT * FROM products WHERE id='$id'";
$run_queryR=$con->query($queryR);
if(mysqli_num_rows($run_queryR) >0){

  while($row= mysqli_fetch_assoc($run_queryR)){
    $count1=$row['count'];
    if($count1==0){
      echo"<div id='so'>Sorry this item has been sold out<br></div>";
      echo"<div id='so'>Click <a id='aa' href='index.php'>Here</a>to return to Homepage</div>";
      die();
    }
    
    }
  }


           	$query="SELECT * FROM cart Where product_id='$id' and user_id='$dbid'";
           	$run_query=$con->query($query);
           	if(mysqli_num_rows($run_query) >0){
           		$updatequantity= "UPDATE cart SET
      quantity = quantity + 1
    WHERE product_id = $id";
    if(mysqli_query($con,$updatequantity)){
			echo "<script>alert('Quantity has been updated')</script>";
	 		}
	 		else {
	 			echo "NO";
	 		}
      
   }
	 	else{
	 		$email=$_SESSION['email'];
    $sql=" SELECT * FROM users WHERE email='$email'";
    $query= mysqli_query($con,$sql);
     $numrows= mysqli_num_rows($query);
     if($numrows!=0){
      	while($row= mysqli_fetch_assoc($query)){
			$dbemail=$row['email'];
			$dbid=$row['id'];
				}
				$id=$_GET['pro_id'];
				$sql2=" SELECT * FROM products WHERE id='$id'";
    $query2= mysqli_query($con,$sql2);
     $numrows= mysqli_num_rows($query2);
     if($numrows!=0){
      	while($row= mysqli_fetch_assoc($query2)){
			$protitle=$row['title'];
			$proprice=$row['price'];
				}
			}
	 		


	 		$sql = "INSERT INTO cart (product_id, user_id,quantity,title,price)
VALUES ('$id', '$dbid', '1','$protitle','$proprice')";

if($con->query($sql) === TRUE){
	echo "<script>alert('Product Has Been Inserted')</script>";
}

	 	}


}

       
      }
  }
      else{
      	echo "Please <a id='clogin' href='login1.php'>login</a><br>";
      }


?>
<a href='index.php'><button style="    border: 0px;
    height: 32px;
    border-radius: 3px;
    margin-right: 14px;
    font-family: 'Open Sans', sans-serif;
    color: chocolate;
    font-size: 15px;">
    Return to HomePage
    </button></a>
<a href='confirm.php'><button style="    border: 0px;
    height: 32px;
    border-radius: 3px;
    margin-right: 14px;
    font-family: 'Open Sans', sans-serif;
    color: chocolate;
    width: 119px;">
    Proceed to Buy</button></a>

</html>