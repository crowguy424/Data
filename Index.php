<?php
// MySQL connection settings
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'my_app';

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display results
if ($result->num_rows > 0) {
    echo "<h2>User List:</h2><ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"] . " - " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

$conn->close();
?>
