
<html>
<head>

     <link href="styles/main1.css" rel="stylesheet">
</head>
<body style="    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 20px;
    color: cadetblue;">
<?php
session_start();


if(!isset($_SESSION['email'])){
	echo"you are not logged in<br>";
	echo" <a  id='lll'href='login1.php'>Login Again here</a>";
}
else{
session_destroy();
session_unset();

echo"You have been logged out<br>";
echo"Click <a id='logout' href='login1.php'>Here</a> to login again";
}
?>
</body>
</html>