<?php
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "user_data";     // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$pin = $_POST['pin'];

// Prepare SQL query
$sql = "INSERT INTO users (name, pin) VALUES ('$name', '$pin')";

// Execute the query and check if data was inserted
if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
