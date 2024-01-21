<?php

$host = 'my-mysql-instance.c7oaea88gfev.ap-south-1.rds.amazonaws.com';    // Replace with your RDS endpoint
$dbname = 'mydatabase';      // Replace with your MySQL database name
$user = 'admin';         // Replace with your MySQL username
$pass = 'vikram123';         // Replace with your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Perform your database operations here

// Close the connection
$pdo = null;

?>

########################################################################################################################
<!DOCTYPE html>
<html>
<head>
  <title>MySQL Connection Test</title>
</head>
<body>

<?php
$conn = new mysqli('my-mysql-instance.c7oaea88gfev.ap-south-1.rds.amazonaws.com:3306', 'admin', 'vikram123', 'mydatabase');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>Connected to MySQL successfully</h2>";

$conn->close();
?>

</body>
</html>
