<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classic-groove";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//handle content album
$albumID = $_POST["albumID"];
$sql = "SELECT * FROM albums where albumID = " . $albumID;
$result = $conn->query($sql);
$album = $result->fetch_assoc();
$album["price"] = number_format((float) $album["price"], 2, '.', '');

//handle album's song
$sql = "SELECT * FROM songs where albumID = " . $albumID;
$result = $conn->query($sql);
$songs = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($songs, $row);
  }
}
?>


<div id="product-details">
  <div class="left">
    <img src=<?php echo "data/imgAlbum/" . $album["imageLink"] ?> alt="">
  </div>
  <div class="right">
    <p class="title">
      <?php echo $album["name"] ?>
    </p>
    <p class="sub-title">The Rolling Stones</p>
    <p class="description">
      <?php echo $album["description"] ?>
    </p>
    <div class="control">
      <h2 class="price">
        <?php echo "$" . $album["price"] ?>
      </h2>
      <div class="btn add-to-cart-btn">
        <i class="fa-brands fa-opencart "></i>
        <span>Add to cart</span>
      </div>
      <div class="btn favorite-btn">
        <i class="fa-solid fa-heart"></i>
        <span>Favorite</span>
      </div>
    </div>
    <h1 class="title">Track list <i class="fa-regular fa-circle-play"
        onclick="playTrackList(<?php echo $album['albumID']?>)"></i></h1>
    <div class="songs-container">
      <?php
      foreach ($songs as $song) {
        echo "<p>${song['name']}</p>";
      }
      ?>
    </div>
  </div>
</div>