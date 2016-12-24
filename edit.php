<!DOCTYPE>
<html>
<head>
<link href="styles/bootstrap.css" rel="stylesheet">
   <link href="styles/main1.css" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/login_register.js"></script>
    <script type="text/javascript" src="js/edit.js"></script>


</head>
<body style="
    background-image: url('images/bg4.jpg');
">

  <div class="edit">
 
	  <table>
	  <tr>
	  <td>First Name:</td>
	  <td>
	  <?php

           session_start();
           $con=mysqli_connect("localhost","root","","eShop");
           
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
					$dbname=$row['first_name'];
				}
				if($email==$dbemail){
					echo $dbname;
           }
       }
   }
           ?>
	  	
	  </td>
	  <td>
	  	 <div id="tab">

	         <ul>
	   <li id="editfn"><a href="#editfn"> <button type="button" class="btn btn-info">Edit</button></a></li>
	   

	  </ul>
	  <div class="editfn">
          <form action='edit_fname.php' method='POST'>
		    <label>First Name </label>
		    <input type="text" name="firstname"> 
		    <input type="submit" value="save" id="LL">
		    </form>
		</div>    
	  

	  </div>
	  
	  
		    
           
           </form>
           </div>
           </td>
           </tr>
           <tr>
           <td>Last Name:</td>
           <td>
           <?php

           
           $con=mysqli_connect("localhost","root","","eShop");
           
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
					$dbname=$row['last_name'];
				}
				if($email==$dbemail){
					echo $dbname;
           }
       }
   }
           ?>
           	
           </td>
           <td><div id="tab">

	         <ul>
	   <li id="editln"><a href="#editln"> <button type="button" class="btn btn-info">Edit</button></a></li>
	   

	  </ul>
	  <div class="editln">
          <form action='edit_lname.php' method='POST'>
		    <label>Last Name: </label>
		    <input type="text" name="lastname"> 
           <input type="submit" value="save" id="LL">
           </form>
           </div>
           	
           </div>
           </td>
           </tr>
            <tr>
           <td>Email:</td>
           <td>
           <p id="PE">
           <?php

           
           $con=mysqli_connect("localhost","root","","eShop");
           
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
					
				}
				if($email==$dbemail){
					echo $dbemail;
           }
       }
   }
           ?>
           	</p>
           </td>
           <td><div id="tab">

	         <ul>
	   <li id="editem"><a href="#editem"> <button type="button" class="btn btn-info">Edit</button></a></li>
	   

	  </ul>
	  <div class="editem">
          <form action='edit_email.php' method='POST'>
		    <label>Email: </label>
		    <input type="text" name="email"> 
           <input type="submit" value="save" id="LL">
           </form>
           </div>
           	
           </div>
           </td>
           </tr>

           <tr>
           <td>Password:</td>
           <td>
           <?php

           
           $con=mysqli_connect("localhost","root","","eShop");
           
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
					
				}
				if($email==$dbemail){
					echo $dbpassword;
           }
       }
   }
           ?>
           	
           </td>
           <td><div id="tab">

	         <ul>
	   <li id="editp"><a href="#editp"> <button type="button" class="btn btn-info">Edit</button></a></li>
	   

	  </ul>
	  <div class="editp">
          <form action='edit_pass.php' method='POST'>
		    <label>Password: </label>
		    <input type="text" name="password"> 
           <input type="submit" value="save" id="LL">
           </form>
           </div>
           	
           </div>
           </td>
           </tr>
           <tr>
           <td>Picture:</td>
           <td>
           <?php

           
           $con=mysqli_connect("localhost","root","","eShop");
           
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
				if($email==$dbemail){
					echo $dbpic;
           }
       }
   }
           ?>
           	
           </td>
           <td><div id="tab">

	         <ul>
	   <li id="editpic"><a href="#editpic"> <button type="button" class="btn btn-info">Edit</button></a></li>
	   

	  </ul>
	  <div class="editpic">
          <form action='edit_pic.php' method='POST'>
		    <label>Picture: </label>
		    <input type="file" name="picture"> 
           <input type="submit" value="save" id="LL">
           </form>
           </div>
           	
           </div>
           </td>
           </tr>





           </table>
           <a href='profile.php'><button type="button" class="btn btn-info" id="RP">Return to Profile</button></a>

</div>

            


	
  
    

</body>
</html>