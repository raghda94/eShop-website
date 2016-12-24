<!DOCTYPE>
<html>
<head>
<link href="styles/main.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/edit.js"></script>
</head>
<body>


          <?php
          session_start();
           $con=mysqli_connect("localhost","root","","eShop");

           
           if($_SERVER["REQUEST_METHOD"] == "GET"){
            $id=$_GET['pro_id'];
           	$email=$_SESSION['email'];
           	$query1="SELECT * FROM users WHERE email='$email'";
           	 $sql= mysqli_query($con,$query1);
              $numrows= mysqli_num_rows($sql);
              if($numrows!=0){
              	while($row= mysqli_fetch_assoc($sql)){
					$dbid=$row['id'];
          
					
				}

			}
      
     
			$query2= "SELECT * FROM cart WHERE product_id='$id'";
			$sql2= mysqli_query($con,$query2);
              $numrows= mysqli_num_rows($sql2);
              if($numrows!=0){
              	$query3= "DELETE FROM cart WHERE product_id= '$id'";
              	if(mysqli_query($con,$query3)){
				echo "<script>alert('Record deleted Successfully')</script>";
        header('Location: confirm.php');
			}
     

              }
         


           }
       
          ?>

          </body>
          </html>
