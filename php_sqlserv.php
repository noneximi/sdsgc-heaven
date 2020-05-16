<!DOCTYPE html>
<html>
<body>
<?php
$servername = "pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "h4h3e3qtsw5tyb6s";
$password = "kwrzwwxn23vj4trr";
$dbname = "sdsgc-heaven-db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</body>
</html>
