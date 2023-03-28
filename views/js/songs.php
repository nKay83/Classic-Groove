<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classic-groove";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$albumID = $_POST["albumID"];
$sql = "SELECT * FROM songs where albumID = " . $albumID;
$result = $conn->query($sql);
$songs = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($songs, $row);
  }
}
echo json_encode($songs);
?>