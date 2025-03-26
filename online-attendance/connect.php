<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
//test
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users data
$sql = "SELECT email, CONCAT(lastname, ', ', firstname, ' ', middlename) AS fullname, office, aor, section, item, position, designation, division, status FROM users";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

