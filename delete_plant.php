<?php
// Database connection parameters
$server = "localhost";
$user = "root";
$password = "";
$database = "petpal";

// Create connection
$connection = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Delete the USER from the database
    $query = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    // Check if deletion was successful
    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>
