<!doctype html>
<html>
<head>
<title>Book a Flight</title>
</head>
<body>
<?php
session_start();
include ("nav.php");
$conn = mysqli_connect("localhost","afinch6","afinch6","afinch6");
$sql = "SELECT *
  FROM flights";
$result = mysqli_query($conn, $sql);
$rows = array();
while($row = mysqli_fetch_array($result)) {
  $rows[] = $row;
}
if (isset($_POST['submit'])&&isset($_POST['reserve'])){
  $sql = "UPDATE `afinch6`.`flights` SET `f_no` = '".$_SESSION['p_id']."' WHERE (`f_no` = '".$_POST['reserve']."');";
if(mysqli_query($conn, $sql)){
  $message = "You have reserved flight number ".$_POST['reserve'].".";
}
else{
  $message="Transaction failed";
}
  echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<link href="style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="mainarea">
<h1 align="center"><font color="Cornsilk" face="Times New Roman">All available Flights</font></h1>
<table align="center">
<tr>

    <th>Number</th>
	<th>Airline</th>
  <th>Origin</th>
  <th>Destination</th>
  </tr>
<?php
$servername = "localhost";
$username = "afinch6";
$password = "afinch6";
$dbname = "afinch6";
  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT f_no, f_name, f_src, f_dest FROM flights";
  $result = $conn->query($sql);
  	foreach($rows as $row){
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "</tr>";
    };
    ?>
  </table>
  <form action="book.php">
    <center>
    <input id="submit" type="submit" value="Go back the book" />
  </center>
</form>
</body>
</html>
