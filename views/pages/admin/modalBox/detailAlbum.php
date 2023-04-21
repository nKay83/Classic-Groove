<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$albumID = $_POST['id'];
$album = getAlbum($albumID);

?>
<div class="modal-placeholder" id="detail-album">
    <div class="modal-box">
        <div class="modal-header ">
            <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i>Album detail</h1>
        </div>
        <div class="modal-left ">
            <div class="modal-info">
                <div class="modal-item">
                    <div class="item-header">Album id</div>
                    <div class="item-input"><input type="text" class="albumID" value="<?= $album['maAlbum'] ?>"
                            disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Album name</div>
                    <div class="item-input"><input type="text" class="albumName" value="<?= $album['tenAlbum'] ?>"
                            disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Kind</div>
                    <div class="item-input"><select class="albumKind" name="" id="" disabled>
                            <option value="<?= $album['maLoai'] ?>"><?= $album['tenLoai'] ?></option>
                        </select>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Artist name</div>
                    <div class="item-input"><input type="text" class="albumArtist" value="<?= $album['tacGia'] ?>"
                            disabled>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Quanitity</div>
                    <div class="item-input"><input type="text" class="albumQuanitity" value="<?= $album['soLuong'] ?>"
                            disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Price</div>
                    <div class="item-input"><input type="text" class="albumPrice" value="<?= $album['gia'] ?>" disabled>
                    </div>
                </div>

                <div class="modal-item">
                    <div class="item-header">Image</div>
                    <div class="item-input"><input type="text" class="albumImg" value="<?= $album['hinh'] ?>" disabled>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Describe</div>
                    <div class="item-input"><textarea cols="30" class="albumDescribe" rows="6"
                            disabled> value="<?= $album['moTa'] ?>"</textarea>
                    </div>
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
                <div class="edit-button" onclick="loadModalBoxByAjax('editAlbum',<?= $album['maAlbum'] ?>)">
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
?>