<!DOCTYPE html>
<html>
<body>
<?php
$servername = "pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "h4h3e3qtsw5tyb6s";
$password = "kwrzwwxn23vj4trr";
$dbname = "sdsgc-heaven-db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>
