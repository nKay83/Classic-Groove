<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$album = getAllAlbum();
$kinds = getKind();
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
          <div class="item" onclick="openDetailalbum(<?= $album[$i]['maAlbum'] ?>)">
            <i class="fa-regular fa-circle-info"></i>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <div class="modal-placeholder" id="detail-album">
    <div class="modal-box">
      <div class="modal-header ">
        <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Album details</h1>
      </div>
      <div class="modal-left ">
        <div class="modal-info">
          <div class="modal-item">
            <div class="item-header">Album id</div>
            <div class="item-input"><input type="text" class="albumID"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Album name</div>
            <div class="item-input"><input type="text" class="albumName"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Kind</div>
            <div class="item-input"><select class="albumKind" name="" id="">
                <?php foreach ($kinds as $k): ?>
                  <option value="<?= $k['maLoai'] ?>"><?= $k['tenLoai'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="modal-item">
            <div class="item-header">Artist name</div>
            <div class="item-input"><input type="text" class="albumArtist" value="buibuibaobao@gmail.com"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Quanitity</div>
            <div class="item-input"><input type="text" class="albumQuantity" value="Ho Chi Minh City"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Price</div>
            <div class="item-input"><input type="text" class="albumPrice" value="0900000000"></div>
          </div>

          <div class="modal-item">
            <div class="item-header">Image</div>
            <div class="item-input"><input type="text" class="albumImg" value="baohongbui313"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Describe</div>
            <div class="item-input"><textarea cols="30" class="albumDescribe" rows="6"></textarea></div>
          </div>
        </div>
      </div>
      <div class="modal-right ">
        <div class="title-list">
          <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title" style="padding-right: 15px;">Song ID</div>
            <div class="title" style="padding-right: 15px;">Song name</div>
            <div class="title" style="padding-right: 10px;">Song file</div>
          </div>
        </div>
        <div class="list">
          <div class="placeholder">
            <div class="info">
              <div class="item">01</div>
              <div class="item">CUS001</div>
              <div class="item">Bùi Hồng Bảo</div>
              <div class="item">.mp3</div>
              <div class="item"><i class="fa-solid fa-xmark-large fa-sm" style="color: #f2623e;"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-button">
        <div class="button-layout"></div>
        <div class="button-layout">
          <div class="edit-button" onclick="openEditalbum()">
            <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
            <div class="info-placeholder">Edit</div>
          </div>
          <div class="delete-button">
            <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
            <div class="info-placeholder">Delete</div>
          </div>
          <div class="back-button" onclick="closeDetailalbum()">
            <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
            <div class="info-placeholder">Back</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-placeholder" id="edit-album">
    <div class="modal-box">
      <div class="modal-header ">
        <h1><i class="fa-regular fa-pen-to-square"></i> Edit album</h1>
      </div>
      <div class="modal-left ">
        <div class="modal-info">
          <div class="modal-item">
            <div class="item-header">Album id</div>
            <div class="item-input"><input type="text" value="CUS001"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Album name</div>
            <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Kind</div>
            <div class="item-input"><select name="" id="">
                <option value="CUS">Customer</option>
                <option value="EM">Employee</option>
                <option value="AD">Admin</option>
              </select>
            </div>
          </div>
          <div class="modal-item">
            <div class="item-header">Artist name</div>
            <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Quanitity</div>
            <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Price</div>
            <div class="item-input"><input type="text" value="0900000000"></div>
          </div>

          <div class="modal-item">
            <div class="item-header">Image</div>
            <div class="item-input"><input type="text" value="baohongbui313"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Describe</div>
            <div class="item-input"><textarea cols="30" rows="6"></textarea></div>
          </div>
        </div>
      </div>
      <div class="modal-right ">
        <div class="title-list">
          <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title" style="padding-right: 15px;">Song ID</div>
            <div class="title" style="padding-right: 15px;">Song name</div>
            <div class="title" style="padding-right: 10px;">Song file</div>
          </div>
        </div>
        <div class="list">
          <div class="placeholder">
            <div class="info">
              <div class="item">01</div>
              <div class="item">CUS001</div>
              <div class="item">Bùi Hồng Bảo</div>
              <div class="item">.mp3</div>
              <div class="item"><i class="fa-solid fa-xmark-large fa-sm" style="color: #f2623e;"></i></div>
            </div>
          </div>
          <div class="add-button"><i class="fa-solid fa-plus-large"></i></div>
        </div>
      </div>
      <div class="modal-button">
        <div class="button-layout"></div>
        <div class="button-layout">
          <div></div>
          <div class="edit-button">
            <div class="icon-placeholder"><i class="fa-solid fa-folder-arrow-down"></i></div>
            <div class="info-placeholder">Save</div>
          </div>
          <div class="back-button" onclick="closeEditalbum()">
            <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
            <div class="info-placeholder">Cancel</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-placeholder" id="new-album">
    <div class="modal-box">
      <div class="modal-header">
        <h1><i class="fa-regular fa-album-circle-plus"></i> New album</h1>
      </div>
      <div class="modal-left ">
        <div class="modal-info">
          <div class="modal-item">
            <div class="item-header">Album id</div>
            <div class="item-input"><input type="text" value="CUS001"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Album name</div>
            <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Kind</div>
            <div class="item-input"><select name="" id="">
                <option value="CUS">Customer</option>
                <option value="EM">Employee</option>
                <option value="AD">Admin</option>
              </select>
            </div>
          </div>
          <div class="modal-item">
            <div class="item-header">Artist name</div>
            <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Quanitity</div>
            <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Price</div>
            <div class="item-input"><input type="text" value="0900000000"></div>
          </div>

          <div class="modal-item">
            <div class="item-header">Image</div>
            <div class="item-input"><input type="text" value="baohongbui313"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Describe</div>
            <div class="item-input"><textarea cols="30" rows="6"></textarea></div>
          </div>
        </div>
      </div>
      <div class="modal-right ">
        <div class="title-list">
          <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title" style="padding-right: 15px;">Song ID</div>
            <div class="title" style="padding-right: 15px;">Song name</div>
            <div class="title" style="padding-right: 10px;">Song file</div>
          </div>
        </div>
        <div class="list">
          <div class="placeholder">
            <div class="info">
              <div class="item">01</div>
              <div class="item">CUS001</div>
              <div class="item">Bùi Hồng Bảo</div>
              <div class="item">.mp3</div>
              <div class="item"><i class="fa-solid fa-xmark-large fa-sm" style="color: #f2623e;"></i></div>
            </div>
          </div>
          <div class="add-button"><i class="fa-solid fa-plus-large"></i></div>
        </div>
      </div>
      <div class="modal-button">
        <div class="button-layout"></div>
        <div class="button-layout">
          <div></div>
          <div class="edit-button">
            <div class="icon-placeholder"><i class="fa-solid fa-folder-arrow-down"></i></div>
            <div class="info-placeholder">Add</div>
          </div>
          <div class="back-button" onclick="closeNewalbum()">
            <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
            <div class="info-placeholder">Cancel</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-placeholder" id="restock-album">
    <div class="modal-box">
      <div class="modal-header ">
        <h1><i class="fa-solid fa-rotate-left"></i> Restock album</h1>
      </div>
      <div class="modal-left ">
        <div class="modal-info">
          <div class="modal-item">
            <div class="item-header">Album id</div>
            <div class="item-input"><input type="text" value="CUS001"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Album name</div>
            <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Kind</div>
            <div class="item-input"><select name="" id="">
                <option value="CUS">Customer</option>
                <option value="EM">Employee</option>
                <option value="AD">Admin</option>
              </select>
            </div>
          </div>
          <div class="modal-item">
            <div class="item-header">Artist name</div>
            <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Quanitity</div>
            <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Price</div>
            <div class="item-input"><input type="text" value="0900000000"></div>
          </div>

          <div class="modal-item">
            <div class="item-header">Image</div>
            <div class="item-input"><input type="text" value="baohongbui313"></div>
          </div>
          <div class="modal-item">
            <div class="item-header">Describe</div>
            <div class="item-input"><textarea cols="30" rows="6"></textarea></div>
          </div>
        </div>
      </div>
      <div class="modal-right ">
        <div class="title-list">
          <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title" style="padding-right: 15px;">Song ID</div>
            <div class="title" style="padding-right: 15px;">Song name</div>
            <div class="title" style="padding-right: 10px;">Song file</div>
          </div>
        </div>
        <div class="list">
          <div class="placeholder">
            <div class="info">
              <div class="item">01</div>
              <div class="item">CUS001</div>
              <div class="item">Bùi Hồng Bảo</div>
              <div class="item">.mp3</div>
              <div class="item"><i class="fa-solid fa-xmark-large fa-sm" style="color: #f2623e;"></i></div>
            </div>
          </div>
          <div class="add-button"><i class="fa-solid fa-plus-large"></i></div>
        </div>
      </div>
      <div class="modal-button">
        <div class="button-layout"></div>
        <div class="button-layout">
          <div></div>
          <div class="edit-button">
            <div class="icon-placeholder"><i class="fa-solid fa-folder-arrow-down"></i></div>
            <div class="info-placeholder">Add</div>
          </div>
          <div class="back-button" onclick="closeRestockalbum()">
            <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
            <div class="info-placeholder">Cancel</div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
//create fuction get all album
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
function getKind()
{
  global $dp;
  $sql = "SELECT * FROM theloai";
  $result = $dp->excuteQuery($sql);
  $kinds = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      array_push($kinds, $row);
    }
  }
  return $kinds;
}
?>