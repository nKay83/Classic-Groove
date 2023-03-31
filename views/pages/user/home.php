<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$sql = "SELECT * FROM album";
$result = $dp->excuteQuery($sql);
$albums = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($albums, $row);
  }
}
?>

<div id="home">
  <div class="slideshow">
    <div class="left">
      <div class="poster">
      </div>
    </div>
    <div class="right">
      <div class="sub-right"></div>
      <div class="sub-right"></div>
    </div>
  </div>
  <h1>Features</h1>
  <div class="grid-container">
    <?php
    foreach ($albums as $al) {
      echo '
      <div class="grid-item" onclick="loadProductDetailsByAjax(' . $al["maAlbum"] . ')" >
        <div class="img-container">
          <img src="data/imgAlbum/' . $al["hinh"] . '.jpg" alt="album\'s poster">
        </div>
        <p class="title">' . $al["tenAlbum"] . '</p>
        <p class="gray">' . $al["tacGia"] . '</p>
      </div>';
    }
    ?>
  </div>
</div>
<!-- 
<div class="grid-item">
  <div class="img-container">
    <img src="https://via.placeholder.com/250x250" alt="Placeholder">
    <div class="img-overlay">
      <div>
        <i class="fa-solid fa-play"></i>
      </div>
    </div>
  </div>
  <p class="title">Headline</p>
  <p class="gray">Captions</p>
</div> -->