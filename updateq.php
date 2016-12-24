<!DOCTYPE>
<html>
<head>
<link href="styles/main1.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/edit.js"></script>
</head>
<body style="text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 22px;
    color: crimson;">

<div id="tab">
<p>Quantity: </p>

	         <ul syle="list-style: none;">
	   <li id="editc"><a href="#editc"> <button type="button" class="btn btn-info" style="width: 70px;
    height: 29px;
    border: 0px;
    border-radius: 3px;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    background-color: burlywood;
    color: blue;"><b>Edit</b></button></a></li>
	   

	  </ul>
	  <div class="editc">

          <form action='updateq.php?' method='POST'>
		    <label>Quantity: </label>
		    <input type="text" name="quantity" style="     background-color: burlywood;
    height: 29px;"> 
		    
           <input type="submit" value="save" id="L1 " style="    background-color: darksalmon;">
           </form>
           </div>
           	
           </div>
          <?php
          session_start();
          
		
           $con=mysqli_connect("localhost","root","","eShop");
           if($_SERVER["REQUEST_METHOD"] == "POST"){
           	$email=$_SESSION['email'];
           	$query1="SELECT * FROM users WHERE email='$email'";
           	 $sql= mysqli_query($con,$query1);
              $numrows= mysqli_num_rows($sql);
              if($numrows!=0){
              	while($row= mysqli_fetch_assoc($sql)){
					$dbid=$row['id'];
					
				}
			}
			$query4="SELECT * FROM cart WHERE user_id='$dbid'";
           	 $sql4= mysqli_query($con,$query4);
              $numrows= mysqli_num_rows($sql4);
              if($numrows!=0){
              	while($row= mysqli_fetch_assoc($sql4)){
					$dbpid=$row['product_id'];
					
				}
			}
			$query5="SELECT * FROM products WHERE id='$dbpid'";
           	 $sql5= mysqli_query($con,$query5);
              $numrows= mysqli_num_rows($sql5);
              if($numrows!=0){
              	while($row= mysqli_fetch_assoc($sql5)){
					$dbptitle=$row['title'];
					
				}
			}
			

		
			$query2= "SELECT * FROM cart WHERE user_id='$dbid' and title='$dbptitle'" ;
			$sql2= mysqli_query($con,$query2);
			
              $numrows= mysqli_num_rows($sql2);
              if($numrows!=0){
              	$quantity=$_POST['quantity'];
       
              	$query3= "UPDATE cart  SET quantity='$quantity' WHERE user_id= $dbid and title='$dbptitle' ";
              	if(mysqli_query($con,$query3)){
				echo "<script>alert('Quantity has been updated')</script>";
      


			}
              
              
            }  
              


           
       }
           

          ?>
          <a href='index.php'><button style="       width: 163px;
    height: 31px;
    border: 0px;
    border-radius: 2px;
    background-color: darkkhaki;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
">Return to homepage</button></a>

          </body>
          </html>
