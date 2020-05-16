<!DOCTYPE html>
<?php
$servername = "pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "h4h3e3qtsw5tyb6s";
$password = "kwrzwwxn23vj4trr";
$dbname = "sdsgc-heaven-db";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
