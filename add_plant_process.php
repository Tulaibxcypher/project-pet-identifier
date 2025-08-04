<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "petpal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from form
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


// Prepare SQL statement
$sql = "INSERT INTO users (name, phone, email) 
        VALUES ('$name', '$phone', '$email')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
     // Redirect to index.php
     header("Location: index.php");
     exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
