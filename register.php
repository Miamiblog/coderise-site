<?php
$servername = "localhost";
$username = "root";  // default XAMPP username
$password = "";      // default XAMPP password is empty
$dbname = "coderise_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$level = $_POST['level'];

// Insert into DB
$sql = "INSERT INTO registrations (name, email, level) VALUES ('$name', '$email', '$level')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>✅ Registration Successful!</h2>";
    echo "<a href='register.html'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
