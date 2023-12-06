<?php
// server details for connection
$servername = "localhost";
$username = "root";
$password = "";
$database  = "portfolio";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// create database if not exists $portfolio

$conn ->close();

?>


<!-- // prepare and bind -->
<!-- $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email); -->

<!-- // set parameters and execute -->

<!-- $firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close(); -->