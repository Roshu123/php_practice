<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trial";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$query =  "insert into login (username,password) values ('$username','$password')";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query. "<br>" . $conn->error;
}

$conn -> close();

?>