<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "CREAATA DATABASE myDB" ;
if ($conn->query($sql) === TRUE) {
echo "Connected created successfully";}
else{
	echo "Error creating database:". $conn-
}
$conn->close();
?>


