<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
You have successfully logged in
<?php
$db = parse_url(getenv("DATABASE_URL"));
// Create connection
$conn = pg_connect(getenv("DATABASE_URL"));
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE flights ()";

$sql = "CREATE TABLE passenger (`p_id` int(11) NOT NULL AUTO_INCREMENT,Fname VARCHAR(50), Lname VARCHAR(50), age int(11), mno varchar(30), email varchar(30), id varchar(30), password varchar(30))ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}

$sql = "CREATE TABLE tickets ( t_no int(30) auto_increment, p_id int(30), f_no varchar(20), PRIMARY KEY (t_no), KEY 'fk_tickets_1_idx' (f_no), KEY 'fk_tickets_2_idx' (f_id), CONSTRAINT `fk_tickets_1` FOREIGN KEY (`f_no`) REFERENCES `flights` (`f_no`),
CONSTRAINT `fk_tickets_2` FOREIGN KEY (`p_id`) REFERENCES `passenger` (`p_id`))ENGINE=InnoDB AUTO_INCREMENT=19132 DEFAULT CHARSET=latin1";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
}
