<?php
$conn = new mysqli("localhost", "root", "", "coderise_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$level = $_POST['level'];

$sql = "INSERT INTO registrations (name, email, level) VALUES ('$name', '$email', '$level')";

if ($conn->query($sql) === TRUE) {
    // Redirect straight to your WhatsApp group
    header("Location: https://chat.whatsapp.com/HKl3Zae4akjGhCxObeLJKb?mode=ems_share_t");
    exit();
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
