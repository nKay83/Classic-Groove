<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$whereSQl = "";
$sql = "SELECT * FROM album ";
$f = false;
if ($name != "" || $category != 0 || $price != 0) {
  $sql = $sql . "where ";
  if ($name != "") {
    $sql = $sql . "tenAlbum LIKE '%" . $name . "%' ";
    $f = true;
  }
  if ($category != 0) {
    if ($f) {
      $sql = $sql . "and ";
    }
    $sql = $sql . "theLoai = " . $category . " ";
    $f = true;
  }
  if ($price != 0) {
    if ($f) {
      $sql = $sql . "and ";
    }
    $sql = $sql . "gia >= " . ($price - 1) * 100 . " and gia <= " . $price * 100;
    $f = true;
  }
}
$result = $dp->excuteQuery($sql);
$album = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($album, $row);
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
    foreach ($album as $al) {
      echo '
      <div class="grid-item" onclick="loadProductDetailsByAjax(' . $al["maAlbum"] . ')" >
        <div class="img-container">
          <img src="data/imgAlbum/' . $al["hinh"] . '.jpg" alt="album\'s poster">
        </div>
        <p class="title">' . $al["tenAlbum"] . '</p>
        <p class="gray artist">' . $al["tacGia"] . '</p>
        <p class="price">' . $al["gia"] . ' $</p>
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