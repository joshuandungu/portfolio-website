<?php
// server details for connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";



// Create connection
$conn = new mysqli($servername, $username, $password, );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $database = "portfolio";
// CREATE DATABASE IF NOT EXISTS $DBNAME
$sql = "CREATE DATABASE IF NOT EXISTS $database";
$result = mysqli_query($conn, $sql);
if($result){
    $conn = new mysqli($server, $username, $password, $database);
}

$conn->select_db($database);

// Table structure for tabble users 
 $query = "CREATE TABLE IF NOT EXISTS  users(
    firstname VARCHAR (50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
    username varchar (50) not null,
    password varchar (50) not null,
    gender varchar (50) not null,
    zipcode VARCHAR(50) NOT NULL,
    address varchar (50) not null,
    city varchar (50) not null,
    state varchar (50) not null
)";
if ($conn->query($query) === TRUE) {
    echo "User table created successfully";
} else {
    echo "Error creating table users: " . $conn->error;
}


// table structure for table  
 $query = "CREATE TABLE  IF NOT EXISTS  admin(
    firstname VARCHAR (50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
    email  varchar (50) UNIQUE not null,
    username varchar (50) not null,
    password varchar (50) not null
)";
if ($conn->query($query) === TRUE) {
    echo "admin table created successfully";
} else {
    echo "Error creating table admin: " . $conn->error;
}

// insert into table admin 
$query = "INSERT INTO  admin(firstname, lastname, email,username,password)
VALUES('joshua','ndungu','joshuandungu2001@gmail.com','joshua','654r636xw')";

if ($conn->query($query) === TRUE) {
    echo "Inseted into table admin successfully successfully";
} else {
    echo "Error inserting into table admin: " . $conn->error;
}


 // social media links 
 $query = " CREATE TABLE IF NOT EXISTS  social_media_links(
    title VARCHAR (50) NOT NULL,
    image varchar (100) not null,
    media_link varchar(200) not null
 )";

if ($conn->query($query) === TRUE) {
    echo "social media table created successfully";
} else {
    echo "Error creating table users: " . $conn->error;
}

 // Table structure for table contact -->
 $query = "CREATE TABLE IF NOT EXISTS  contact(
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subject TEXT NOT NULL,
    message LONG NOT NULL
 )";
if ($conn->query($query) === TRUE) {
    echo "Contact table created successfully";
} else {
    echo "Error creating table contact: " . $conn->error;
}


 // Table structure for table resume 
 $query = "CREATE TABLE IF NOT EXISTS  resume(
    id INT (11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    degree VARCHAR(200) NOT NULL,
    period varchar (50) not null,
    institution VARCHAR(50) NOT NULL,
    image VARCHAR(100) NOT NULL,
    description LONG NOT NULL
 )";
if ($conn->query($query) === TRUE) {
    echo "resume table created successfully";
} else {
    echo "Error creating table resume: " . $conn->error;
}

 // tBALE STRUCTURE FOR TABLE services //
$query = " CREATE TABLE IF NOT EXISTS  services(
    title VARCHAR(50) NOT NULL,
    image VARCHAR (50) NOT NULL,
    price INT (11) NOT NULL,
    description LONG  NOT NULL
 )";

if ($conn->query($query) === TRUE) {
    echo "services table created successfully";
} else {
    echo "Error creating table services: " . $conn->error;
}
 //Tbale structure for table header 
 $query = "CREATE TABLE IF NOT EXISTS  header(
    my_name VARCHAR (50) NOT NULL,
    image VARCHAR (50) NOT NULL
 )";

if ($conn->query($query) === TRUE) {
    echo "header table created successfully";
} else {
    echo "Error creating table header: " . $conn->error;
}
 //  Create table about 
 $query = "CREATE TABLE IF NOT EXISTS  about (
    title VARCHAR(50) NOT NULL,
    dob date not null,
    phone int (15) not null,
    city VARCHAR (50) NOT NULL,
    age INT (15) NOT NULL,
    degree VARCHAR(100) NOT NULL,
    email VARCHAR(50) not null,
    freelance VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL
 )";

if ($conn->query($query) === TRUE) {
    echo "about table created successfully";
} else {
    echo "Error creating table about: " . $conn->error;
}

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