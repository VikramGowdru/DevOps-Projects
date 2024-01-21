<!DOCTYPE html>
<html>
<head>
  <title>MySQL Connection Test</title>
</head>
<body>

<?php
$conn = new mysqli('my-mysql-instance.c7oaea88gfev.ap-south-1.rds.amazonaws.com', 'admin', 'vikram123', 'mydatabase');
echo "Hello All";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>Connected to MySQL successfully</h2>";

$conn->close();
?>

</body>
</html>
