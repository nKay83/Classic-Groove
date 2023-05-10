<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$album = getAllAlbum();
?>

<div id="productManager">
  <div class="header">
    <h2><i class="fa-solid fa-album"></i>&#09; Product management</h2>
    <div class="button-placeholder">
      <div class="new-button" onclick="loadModalBoxByAjax('newAlbum')">
        <div class="icon-placeholder"><i class="fa-solid fa-user-plus fa-sm"></i></div>
        <div class="info-placeholder">New</div>
      </div>
    </div>
    <div class="search-bar">
      <div class="search-input">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" value="Looking for somethings?">
      </div>
      <div class="filter-input">
        <i class="fa-regular fa-filter"></i>
        <select name="" id="">
          <option value="default">Choose type</option>
          <option value="blue">Blue</option>
          <option value="acoustic">Acoustic</option>
          <option value="classical">Classical</option>
          <option value="country">Country</option>
          <option value="electronic">Electronic</option>
          <option value="jazz">Jazz</option>
          <option value="pop/rock">Pop/Rock</option>
        </select>
      </div>
      <div class="date-begin">
        <input type="date" name="" id="" value="Begin date">
      </div>
      <div class="date-end">
        <input type="date" name="" id="" value="End date">
      </div>
    </div>
  </div>
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