<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$album = getAllAlbum();
?>

<div id="productManager">
  <h1><i class="fa-solid fa-album"></i>&#09; Product management</h1>
  <!-- <div class="button-placeholder">
    <div class="new-button" onclick="openNewalbum()">
      <div class="icon-placeholder"><i class="fa-solid fa-album-circle-plus"></i></div>
      <div class="info-placeholder">New</div>
    </div>
    <div class="restock-button" onclick="openRestockalbum()">
      <div class="icon-placeholder"><i class="fa-solid fa-rotate-left"></i></div>
      <div class="info-placeholder">Restock</div>
    </div>
  </div> -->
  <div class="title-list">
    <div class="title-placeholder">
      <div class="title" style="padding-right: 10px;">No.</div>
      <div class="title" style="padding-right: 15px;">Album ID</div>
      <div class="title" style="padding-right: 15px;">Album name</div>
      <div class="title" style="padding-right: 10px;">Artist name</div>
      <div class="title">Kind</div>
      <div class="title">Price</div>
      <div class="title">Quanitity</div>
      <div class="title">Status</div>
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
          <div class="item">
            <?php if ($album[$i]['TrangThai'] == 1): ?>
              Hoạt động
            <?php endif; ?>
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


<!-- <div id="changeSong">
  <div class="container">
    <div class="change-1">
      <div class="item-1">
        <span class="detail">Song id</span>
        <input type="text" placeholder="" required>
      </div>

      <div class="item-2">
        <span class="detail">Song file</span>
        <input type="text" placeholder="" required>
      </div>
    </div>
    <div class="change-2">
      <div class="item-3">
        <span class="detail">Song name</span>
        <input type="text" placeholder="" required>
      </div>
    </div>
    <div class="change-3">
      <div class="item"></div>
      <div class="item-5"><a href="#" class="btn">Add&nbsp;&nbsp;<i class="fas fa-plus"></i></a></div>
      <div class="item-6"><a href="#" class="btn">Cancel&nbsp;&nbsp;<i class="fas fa-times"></i></a></div>
    </div>

  </div>
  <div class="overlay"></div>
</div>  -->

<?php
function getAllAlbum()
{
  global $dp;
  $sql = "SELECT * FROM album join theloai on album.theLoai = theloai.maLoai";
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