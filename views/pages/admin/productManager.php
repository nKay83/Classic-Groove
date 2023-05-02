<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$album = getAllAlbum();
?>

<div id="productManager">
  <h1><i class="fa-solid fa-album"></i>&#09; Product management</h1>
  <div class="title-list">
    <div class="title-placeholder">
      <div class="title" style="padding-right: 10px;">No.</div>
      <div class="title" style="padding-right: 15px;">Album ID</div>
      <div class="title" style="padding-right: 15px;">Album name</div>
      <div class="title" style="padding-right: 10px;">Artist name</div>
      <div class="title">Kind</div>
      <div class="title">Price</div>
      <div class="title">Quanitity</div>
    </div>
  </div>
  <div class="list">
    <?php for ($i = 0; $i < count($album); $i++): ?>
      <div class="placeholder">
        <div class="info">
          <div class="item">
            <?= sprintf("%02d", $i + 1) ?>
          </div>
          <div class="item">
            <?= $album[$i]['maAlbum'] ?>
          </div>
          <div class="item">
            <?= $album[$i]['tenAlbum'] ?>
          </div>
          <div class="item">
            <?= $album[$i]['tacGia'] ?>
          </div>
          <div class="item">
            <?= $album[$i]['tenLoai'] ?>
          </div>
          <div class="item">
            <?= $album[$i]['gia'] ?>
          </div>
          <div class="item">
            <?= $album[$i]['soLuong'] ?>
          </div>
          <div class="item" onclick="loadModalBoxByAjax('detailAlbum',<?= $album[$i]['maAlbum'] ?>)">
            <i class="fa-regular fa-circle-info"></i>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <div id="modal-box"></div>
</div>




<?php
function getAllAlbum()
{
  global $dp;
$sql = "SELECT *
        FROM album join theloai on album.theLoai = theloai.maLoai
        where album.TrangThai = 1";
  $result = $dp->excuteQuery($sql);
  $album = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      array_push($album, $row);
    }
  }
  return $album;
}
?>