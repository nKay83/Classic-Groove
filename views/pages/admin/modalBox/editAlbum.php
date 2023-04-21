<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$albumID = $_POST['id'];
$album = getAlbum($albumID);
$kinds = getKinds();
?>
<div class="modal-placeholder" id="edit-album">
    <div class="modal-box">
        <div class="modal-header ">
            <h1><i class="fa-regular fa-pen-to-square"></i> Edit album</h1>
        </div>
        <div class="modal-left ">
            <div class="modal-info">
                <div class="modal-item">
                    <div class="item-header">Album id</div>
                    <div class="item-input"><input type="text" class="albumID" value="<?= $album['maAlbum'] ?>"
                            disabled>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Album name</div>
                    <div class="item-input"><input type="text" class="albumName" value="<?= $album['tenAlbum'] ?>">
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Kind</div>
                    <div class="item-input"><select class="albumKind" name="" id="">
                            <option value="<?= $album['maLoai'] ?>"><?= $album['tenLoai'] ?></option>
                            <?php foreach ($kinds as $k): ?>
                                <?php if ($k['maLoai'] == $album['maLoai']) {
                                    continue;
                                }
                                ?>
                                <option value="<?= $k['maLoai'] ?>"><?= $k['tenLoai'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Artist name</div>
                    <div class="item-input"><input type="text" class="albumArtist" value="<?= $album['tacGia'] ?>">
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Quanitity</div>
                    <div class="item-input"><input type="text" class="albumQuanitity" value="<?= $album['soLuong'] ?>">
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Price</div>
                    <div class="item-input"><input type="text" class="albumPrice" value="<?= $album['gia'] ?>"></div>
                </div>

                <div class="modal-item">
                    <div class="item-header">Image</div>
                    <div class="item-input"><input type="text" class="albumImg" value="<?= $album['hinh'] ?>"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Describe</div>
                    <div class="item-input"><textarea class="albumDescribe" cols="30"
                            rows="6"><?= $album['moTa'] ?></textarea></div>
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
                <div class="back-button" onclick="loadModalBoxByAjax('detailAlbum',<?= $album['maAlbum'] ?>)">
                    <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
                    <div class="info-placeholder">Cancel</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
function getAlbum($albumID)
{
    global $dp;
    $sql = "SELECT * FROM album
            join theloai on album.theLoai = theloai.maLoai
            WHERE album.maAlbum =" . $albumID;
    $result = $dp->excuteQuery($sql);
    return $result->fetch_assoc();
}
function getKinds()
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
?>?>