<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
You have successfully logged in
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
$sql = "CREATE TABLE flights (
  `f_no` varchar(20) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_src` varchar(20) NOT NULL,
  `f_dest` varchar(20) NOT NULL,
  PRIMARY KEY (`f_no`),
  KEY `fk_flights_1_idx` (`f_no`),
  KEY `index1` (`f_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$sql = "CREATE TABLE parking (
  `spot_no` int(11),
  `p_no` int(11) ,
  `vip` int(11) DEFAULT '0',
  `price` varchar(45) DEFAULT '0',
  PRIMARY KEY (`spot_no`),
  KEY `fk_parking_1_idx` (`p_no`),
  CONSTRAINT `fk_parking_1` FOREIGN KEY (`p_no`) REFERENCES passenger (`p_id`)
)";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$sql = "CREATE TABLE passenger (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `mno` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$sql = "CREATE TABLE tickets (
  `t_no` int(30) NOT NULL AUTO_INCREMENT,
  `p_id` int(30) NOT NULL,
  `f_no` varchar(20) NOT NULL,
  PRIMARY KEY (`t_no`),
  KEY `fk_tickets_1_idx` (`f_no`),
  KEY `fk_tickets_2_idx` (`p_id`),
  CONSTRAINT `fk_tickets_1` FOREIGN KEY (`f_no`) REFERENCES `flights` (`f_no`),
  CONSTRAINT `fk_tickets_2` FOREIGN KEY (`p_id`) REFERENCES `passenger` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19132 DEFAULT CHARSET=latin1";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$cities = array("Atlanta", "New York", "Chicago", "Denver", "Los Angeles", "Boston", "Miami", "San Diego");
$airlines = array("Delta", "United", "JetBlue", "Southwest", "Frontier");


for($x = 0; $x <= 30; $x++) {
	$origin = $cities[array_rand($cities)];
	$dest = $cities[array_rand($cities)];
	$air = $airlines[array_rand($airlines)];
	$fno = $air[0].rand(100,999);

//	$sql = "INSERT INTO flights VALUES ('$fno', '$air', '$origin', '$dest')";
	//$sql = "INSERT INTO parking VALUES ()";
}
if ($conn->query($sql) === TRUE) {
    echo "New Album successfully saved";
} else {
    echo "Error: New Album failed to be saved";
}

$sql = "INSERT INTO parking VALUES (2,NULL,1,'30'),(3,NULL,1,'30'),(4,NULL,1,'30'),(5,NULL,1,'30'),(6,NULL,0,'15'),(7,NULL,0,'15'),(8,NULL,0,'15'),(9,NULL,0,'15'),(10,NULL,0,'15'),(11,NULL,0,'15'),(12,NULL,0,'15'),(13,NULL,0,'15'),(14,NULL,0,'15'),(15,NULL,0,'15')";
//$sql = "INSERT INTO parking VALUES ('1',NULL,'1','30')";
if ($conn->query($sql) === TRUE) {
    echo "New Album successfully saved";
} else {
    echo "Error: New Album failed to be saved";
}

$conn->close();
?>
<a href="index.php"><input type="button" id="btn1" value="OK"></a>
</body>
</html>
