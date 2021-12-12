<!DOCTYPE html>
<html>
<head>
<title> Flight Booking</title>
<link href="style.css" type="text/css" rel="stylesheet"/>
<style>
.grid-container {
  display: grid;
  height: 400px;
  align-content: center;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
 
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;

}
img {
  border-radius: 50%;

}
a {
  color:blue;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
p{
    font-size: 15px;
}
</style>
</head>
<body>
<?php 
session_start();
include("nav.php");
?>
<div align="center" id="main_area">
<div id="welcometext">Flight Booking</div>

<div id="fillertext">    
   <div class="grid-container">
  <div>
      <img src="books.png" alt="Avatar" style="width:100px" class="center">  
      <a href="book.php">Book a Flight</a>
    <p>Book your own flight, one-way or roundtrip.</p>
        <br></div>
  <div> 
     <img src="parking.png" alt="Avatar" style="width:80px" class="center">  
    <a href="parking.php">Reserve a Parking Space</a><br>
    <p>Save time and money by booking your airport <br> parking reservations online ahead. </p>
</div>

  <div>
    <img src="ticket.jpg" alt="Avatar" style="width:80px" class="center">    
    <a href="myFlights.php">View Booked Flights</a><br>
    <p>View all the Booked Flights</p>
</div>  
  
</div>
</div>




<div id="registertext">
<button class="button button4"><a href="register.php" style="color: white">Register for an account</a></button>    
<div>
</div>
</body>
</html>