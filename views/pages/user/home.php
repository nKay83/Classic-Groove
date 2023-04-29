<?php
require("../../../util/dataProvider.php");
require("../../../util/pagination.php");
$dp = new DataProvider();

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$currentPage = $_POST['currentPage'];
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
for ($j = 1; $j < 3; $j++) {
  $max = count($album);
  for ($i = 0; $i < $max; $i++) {
    array_push($album, $album[$i]);
  }
}
$pa = new Pagination($album, 12, $currentPage);
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
    <?php for ($i = $pa->startProduct(); $i <= $pa->endProduct(); $i++): ?>
      <div class="grid-item" onclick="loadProductDetailsByAjax(<?= $album[$i]['maAlbum'] ?>)">
        <div class="img-container">
          <img src="data/imgAlbum/<?= $album[$i]["hinh"] ?>.jpg" alt="album\' s poster">
        </div>
        <p class="title">
          <?= $album[$i]["tenAlbum"] ?>
        </p>
        <p class="gray artist">
          <?= $album[$i]["tacGia"] ?>
        </p>
        <p class="price">
          <?= $album[$i]["gia"] ?> $
        </p>
      </div>
    <?php endfor ?>
  </div>
  <div class="pagination-placeholder" <?php if ($pa->quantityPage == 0)
    echo 'style="display:none"' ?>>
      <div class="pagination-box">
        <div class="item" onclick=loadHomeByAjax(<?php echo $pa->prevDot() ?>)><i class="fa-solid fa-chevron-left"></i>
      </div>
      <div class="item">
        <?php echo $currentPage . " OF " . $pa->quantityPage ?>
      </div>
      <div class="item" onclick=loadHomeByAjax(<?php echo $pa->nextDot() ?>)><i class="fa-solid fa-chevron-right"></i>
      </div>

    </div>
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


<!-- <div class="grid-item" onclick="loadProductDetailsByAjax(' . $album[$i][" maAlbum"] . ')" >
    <div class="flex-container">
      <div class="img-container">
            <img src="data/imgAlbum/' . $album[$i]["hinh"] . '.jpg" alt="album\' s poster">
      </div>
      <div class="info-placeholder">
        <div><p class="title">' . $album[$i]["tenAlbum"] . '</p></div>
        <div><p class="gray artist">' . $album[$i]["tacGia"] . '</p></div>
        <div> <p class="price">' . $album[$i]["gia"] . ' $</p></div>
      </div>
    </div>
</div> -->