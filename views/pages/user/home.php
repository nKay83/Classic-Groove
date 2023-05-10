<?php
require("../../../util/dataProvider.php");
require("../../../util/pagination.php");
$dp = new DataProvider();

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$currentPage = $_POST['currentPage'];
$album = getAlbums($name, $category, $price);
for ($j = 1; $j < 3; $j++) {
  $max = count($album);
  for ($i = 0; $i < $max; $i++) {
    array_push($album, $album[$i]);
  }
}
$pa = new Pagination($album, 12, $currentPage);

$slides = getAllSlide();
?>

<div id="home">
  <div class="slideshow">
    <div class="left">
      <div class="poster">
        <div class="slider">
          <div class="list">
            <?php foreach ($slides as $slide): ?>
              <div class="item" onclick="loadProductDetailsByAjax(<?= $slide['linkTo'] ?>)">
                <img src="data/slideShow/<?= $slide['linkHinh'] ?>" alt="img slide show">
              </div>
            <?php endforeach ?>
          </div>
          <!-- <div class="buttons"> -->
          <button id="prev" class="prev" onclick="prevSlide()">
            <i class="fa-light fa-angle-left"></i>
          </button>
          <button id="next" class="next" onclick="nextSlide()">
            <i class="fa-light fa-angle-right"></i>
          </button>
          <!-- </div> -->
          <ul class="dots">
            <li onclick="changeSlide(0)" class="active"></li>
            <?php for ($i = 1; $i < count($slides); $i++): ?>
              <li onclick="changeSlide(<?= $i ?>)"></li>
            <?php endfor ?>
          </ul>
        </div>
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
          <img src="data/imgAlbum/<?= $album[$i]["hinh"] ?>" alt="album\' s poster">
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
  <?php if ($pa->quantityPage != 0): ?>
    <div class="pagination-placeholder">
      <div class="pagination-box">
        <div class="item" onclick="loadHomeByAjax(<?= $pa->prevDot() ?>)"><i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="item">
          <?php echo $currentPage . " OF " . $pa->quantityPage ?>
        </div>
        <div class="item" onclick="loadHomeByAjax(<?= $pa->nextDot() ?>)"><i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </div>
  <?php endif ?>
</div>
<?php
function getAlbums($name, $category, $price)
{
  global $dp;
  $sql = "SELECT * FROM album where trangThai = 1 ";
  $f = false;
  if ($name != "" || $category != 0 || $price != 0) {
    $sql = $sql . "and ";
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
  return $album;
}

function getAllSlide()
{
  global $dp;
  $sql = "SELECT * FROM slideshow";
  $result = $dp->excuteQuery($sql);
  $slides = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      array_push($slides, $row);
    }
  }
  return $slides;
}
?>