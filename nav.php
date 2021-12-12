<!DOCTYPE html>
<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	
        

<?php
$servername = "localhost";
$username = "mkaur10";
$password = "mkaur10";
$dbname = "mkaur10";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE TABLE albums (artist VARCHAR(20), name VARCHAR(50), genre VARCHAR(20), rdate INT(4))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$sql = "CREATE TABLE artists (name VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$conn->close();
?> 


<ul class="topnav">
  <li><a href="index.php">Home</a></li>
  <li><a href="book.php">Book Flights</a></li>
  <li><a href="parking.php">Reserve Parking</a></li>
  


<?php
if(isset($_SESSION['user_info']))
	echo '<li><a href="myFlights.php">My Flights</a></li>';
else
	echo '<li> <a href="login.php">Login</a> </li>';
?>
</ul>
</div>
</body>
</html>