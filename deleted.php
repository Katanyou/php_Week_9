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

$sql = "DELETE FROM MyGuests WHRE id=3" ;

if ($conn->query($sql === TRUE {
	echo "Record deleted successfully" ;
	}else{
	echo "Error deleting record:".$conn->error ;
}
$conn->close();
?>


