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
// Check if is provided and valid
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Fetch the user information based on the provided PlantID
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    // Check if the users exists
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Display the form to update information
        ?>
        <form action="update_plant_process.php" method="POST">
            <input type="" name="id" value="<?php echo $row['id']; ?>">
            <label for="name">Name:</label>

            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            
            <label for="description" >Phone:</label>
            <textarea name="phone"><?php echo $row['phone']; ?></textarea><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
            
            
        </form>
        <?php
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
?>
