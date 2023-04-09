<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
//handle content album
$albumID = $_POST["albumID"];
$sql = "SELECT * FROM album where maAlbum = " . $albumID;
$result = $dp->excuteQuery($sql);
$album = $result->fetch_assoc();

//handle album's song
$sql = "SELECT * FROM baihat_album join baihat on baihat_album.BaiHat_maBaiHat = baihat.maBaiHat
where Album_maAlbum = " . $albumID;
$result = $dp->excuteQuery($sql);
$songs = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($songs, $row);
  }
}
?>


<div id="product-details">
  <div class="left">
    <img src=<?php echo "data/imgAlbum/" . $album["hinh"] . ".jpg" ?> alt="hinh">
  </div>
  <div class="right">
    <p class="title">
      <?php echo $album["tenAlbum"] ?>
    </p>
    <p class="sub-title">
      <?php echo $album['tacGia'] ?>
    </p>
    <p class="description">
      <?php echo $album["moTa"] ?>
    </p>
    <h2 class="price">
      <?php echo "$" . number_format((float) $album["gia"], 2, '.', '') ?>
    </h2>
    <div class="control">
      <div class="btn add-to-cart-btn" onclick="addToCart(<?php echo $album['maAlbum'] ?>)">
        <i class="fa-regular fa-cart-shopping"></i>
        <span>Add to cart</span>
      </div>
      <div class="btn favorite-btn">
        <i class="fa-solid fa-heart"></i>
        <span>Favorite</span>
      </div>
    </div>
    <h1 class="title">Track list <i class="fa-regular fa-circle-play"
        onclick="playTrackList(<?php echo $album['maAlbum'] ?>)"></i></h1>
    <div class="songs-container">
      <?php
      $i = 1;
      foreach ($songs as $song) {
        echo "<p>${i}. ${song['tenBaiHat']}</p>";
        $i++;
      }
      ?>
    </div>
  </div>
  <div class="notice">
      <p class="cart-adding"><i class="fa-solid fa-cart-circle-plus"></i> Added to your Cart</p>
      <!-- <p class="favor-adding"><i class="fa-solid fa-heart-circle-plus"></i> Added to your Favorite</p> -->
      <!-- <p class="favor-removing"><i class="fa-solid fa-heart-circle-xmark"></i> Removed from your Favorite</p> -->
    </div>

</div>