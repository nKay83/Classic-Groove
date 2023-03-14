<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classic-groove";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM songs";
$result = $conn->query($sql);
$song = $result->fetch_assoc();
?>

<h1><?php echo $song["name"]  ?> </h1>