<?php
// Include your database connection file
$servername = "localhost";
$username = "root";
$password = "";
$database = "petpal";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate 
    $id = $_POST['id'];
    
    // Get form data
    $Name = $_POST['name'];
    $CategoryID = $_POST['phone'];
    $Description = $_POST['email'];
    
    
    // Update information in the database
    $query = "UPDATE users SET name='$Name', phone='$phone', emai;='$email'WHERE id=$id";

    
    $result = mysqli_query($connection, $query);

    if($result) {
        header("Location: index.php");
     exit();
    } else {
        echo "Error updating user information: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}
?>
