<!DOCTYPE>
<html>
<head>
	<link href="styles/bootstrap.css" rel="stylesheet">
    <link href="main2.css" rel="stylesheet">
</head>
<body>
 
  <form action='insert_product.php' method='POST' enctype="multipart/form-data">
   <table align="center" id="TT">
       <tr>
       <td> Product Id:</td>
       <td><input type="text" name="id" id="II"><br></td>
       </tr>

	   <tr>
	     <td>Product Title:</td>
	     <td><input type="text" name="title" id="title"><br></td>
	   </tr>
	   <tr>
	     <td>Product Price:</td>
	     <td><input type="text" name="price" id="price"><br></td>
	   </tr>
	   <tr>
	     <td>Product Description:</td>
	     <td><input type="text" name="description" id="des"><br></td>
	   </tr>
	   <tr>
	     <td>Product Image:</td>
	     <td><input type="file" name="image"><br></td>
	   </tr>
	   <tr align="center">
	   <td colspan="8"><input type="submit" value="save" id="SV" ></td>
	   </tr>
   </table>

  </form>

  

</body>
</html>
<?php
$con= mysqli_connect("localhost","root","","eshop");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$id=$_POST['id'];
$title=$_POST['title'];
$price=$_POST['price'];
$desc=$_POST['description'];
$product_image= $_FILES["image"]["name"];
	$check="SELECT * FROM products WHERE id='$id'";
	$run_query=$con->query($check);
	if(mysqli_num_rows($run_query) >0 ){

		if($product_image !=""){
			$updateimage=  "UPDATE products SET
      image= '$product_image'
    WHERE id = $id";
     if(mysqli_query($con,$updateimage)){
			echo "<script>alert('Image has been updated')</script>";
	 		}
	 	}
	 elseif($title!=""){
	
         

	 $updatecount= "UPDATE products SET
      count = count + 1
    WHERE id = $id";
      if(mysqli_query($con,$updatecount)){
			echo "<script>alert('Product has been updated')</script>";
	 		}
	 	}

			
     
     }
     

else{
	$sql = "INSERT INTO products (id, title,price,description,count,image)
VALUES ('$id', '$title', '$price','$desc','1','$product_image')";

if($con->query($sql) === TRUE){
	echo "<script>alert('Product Has Been Inserted')</script>";
}

}
}


?>
 <a href="/eshop/index.php"><button style="margin-top: -379px;
    border: 0px;
    height: 34px;
    width: 147px;
    border-radius: 2px;">Return to Homepage</button></a> 