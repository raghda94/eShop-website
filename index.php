<!DOCTYPE>
<html>
	<head>
	<link href="styles/bootstrap.css" rel="stylesheet">
    <!-- <link href="styles/main.css" rel="stylesheet"> -->
      <link href="styles/main1.css" rel="stylesheet">

    
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/login_register.js"></script>

    
	</head>
	<body>

  <div class="container-fluid">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
       <ul class="nav navbar-nav">
        <li><a href="profile.php">My Account
        <span class="glyphicon glyphicon-user" id="g1"></span></a>
        </li>
        <li><a href="confirm.php">My Cart
        <span class="glyphicon glyphicon-shopping-cart" id="g4"></span></a>

        </a></li>
        <li id="checkout">
        <a href="checkout.php">Checkout</a>
        <span class="glyphicon glyphicon-check" id="g3"></span>
        </a>
        
        </li>
        <li id="history">
        <a href="history.php">History</a>
        <span class="glyphicon glyphicon-folder-close" id="g10"></span>
        </a>
        
        </li>


       </ul>
       <ul class="nav navbar-nav navbar-right">
         <ul id="un">
        
     <li id="login"><a href="login1.php" id="signin"> SignIn</a></li>
     <li id="register"><a href="register.php" id="signup">SignUp</a></li>
     <li id="logout2"><a href="logout.php" id="logout3">Logout</a></li>


    </ul>

       </ul>
      </div>
    </nav>
    
    </div>
      
     <div class="row" >
      <img src="images/image1.jpg" id="image1">
      </div> 
    
      

     <div class="row" id="roww">
    <div class="col-md-3" id="COL1">
    <button id="but1">
    <span class=" glyphicon glyphicon-refresh" aria-hidden="true" id="gi1"></span>
   
      <p id="p1">30 Days Return</p>
    </button>
    </div>
     <div class="col-md-3" id="COL1">
    <button id="but2">

   
    <span class=" glyphicon glyphicon-send" aria-hidden="true" id="gi1"></span>
   
      <p id="p2">Free Shipping</p>
    </button>
    </div>
     <div class="col-md-3" id="COL1">
    <button id="but3">
    <span class=" glyphicon glyphicon-lock" aria-hidden="true" id="gi1"></span>
   
      <p id="p3">Secure Payments</p>
    </button>
    </div>
     <div class="col-md-3" id="COL1">
    <button id="but4">
    <span class=" glyphicon glyphicon-gift" aria-hidden="true" id="gi1"></span>
   
      <p id="p4">New Products</p>
    </button>
    </div>
     
    </div>
    <div class="row" id="roww" >
    <h1>Latest Products</h1>
    </div> 
    

   <div class="row" id="roww">
  <div class="col-md-3" >
  <img src="images/Hp.jpg" id="HP">
  <div class="price" id="HPP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=123";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a id='a1' href='cart.php?pro_id=$id'><button id='B1'>
   Add to Cart</button></a>";
 }
    }


  ?>
  </div>

  </div>
  <div class="col-md-3">
  <img src="images/Lenovo.jpg" id="Lenovo">
  <div id="LPP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=1001";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a href='cart.php?pro_id=$id'><button id='B2'>Add to Cart</button></a>";
    }
  }


  ?>
  </div>
  
  </div>
  <div class="col-md-3">
  <img src="images/MAIR.jpg" id="MAIR">
  <div id="MAP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=440";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a href='cart.php?pro_id=$id'><button id='B3'>Add to Cart</button></a>";
    }
  }


  ?>
  </div>
  </div>
  <div class="col-md-3">
  <img src="images/mpro.jpg" id="MPRO">
  <div id="MP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=220";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a href='cart.php?pro_id=$id'><button id='B4'>Add to Cart</button></a>";
    }
      }


  ?>
  </div>
  </div>
  </div> 
  <div class="row" id="roww" >
   <div class="col-md-3">
   <img src="images/iphone6s.jpg" id="I6">
  <div id="Ip6">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=10";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo" Sold Out";

        }
        else{
        echo"
  <a href='cart.php?pro_id=$id'><button id='B5'>Add to Cart</button></a>";
    }
      }


  ?>
  </div>
   </div>
   <div class="col-md-3">
   <img src="images/HTC.jpg" id="HTC">
  <div id="HTCP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=14";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a href='cart.php?pro_id=$id'><button id='B6'>Add to Cart</button></a>";
    }

}
  ?>
  </div>
   </div>
   <div class="col-md-3">
   <img src="images/LG.jpg" id="LG">
  <div id="LGP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=40";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a href='cart.php?pro_id=$id'><button id='B7'>Add to Cart</button></a>";
    }
      }


  ?>
  </div>
   </div>
   <div class="col-md-3">
   <img src="images/ss6jpg.jpg" id="SS">
  <div id="SSP">
  <?php
  $con= mysqli_connect("localhost","root","","eshop");
  $query1= "SELECT * FROM products WHERE id=20";
  $query= mysqli_query($con,$query1);
   $numrows= mysqli_num_rows($query);
   if($numrows!=0){
        while($row= mysqli_fetch_assoc($query)){
        	$price=$row['price'];
        	$id=$row['id'];
          $stock=$row['count'];

        }
        echo "$".$price ;
        echo"<div id='stock'>Stock". "(" . $stock . ")</div>";
        if($stock <1){
          echo"<button> Sold Out</button";

        }
        else{
        echo"
   <a href='cart.php?pro_id=$id'><button id='B8'>Add to Cart</button></a>";
    }
      }


  ?>
  </div>
   </div>
  </div>
 


 



	     
	 
	
	
	</body>

</html>