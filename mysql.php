<html>

<body>

<?php
$servername = "projweb";
$username = "egabrielsen";
$password = "sharpclaw";

//creating connection
$conn = new mysqli($servername, $username, $password);
//check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo "ERROR";
}

//create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

</body>

</html>
