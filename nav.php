<!DOCTYPE html>
<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	
        

<?php

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