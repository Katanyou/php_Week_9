<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATAE MyGuesets SET lastname='Doe' WHERE id=2 " ;

if ($conn->query($sql === TRUE {
	echo "Record updated successfully" ;
	}else{
	echo "Error updated record:".$conn->error ;
}
$conn->close();
?>


