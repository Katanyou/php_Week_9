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

$sql = "INSERT INTO MyGuests (firstname,lastname, email)
VALIES ('John' , 'Doe', 'john@example.com')" ;
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
}else{
	echo "Error:".$sql. "<br>". $conn->error;
}
$conn->close();
?>


