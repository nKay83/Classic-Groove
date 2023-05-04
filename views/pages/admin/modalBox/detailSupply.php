<div class="modal-placeholder" id="detail-album">
    <div class="modal-box">
        <div class="modal-header ">
            <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i>Album detail</h1>
        </div>
        <div class="modal-left ">
            <div class="modal-info">
                <div class="modal-item">
                    <div class="item-header">Album id</div>
                    <div class="item-input"><input type="text" class="albumID" value="" disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Album name</div>
                    <div class="item-input"><input type="text" class="albumName" value="" disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Kind</div>
                    <div class="item-input"><select class="albumKind" name="" id="" disabled>

                        </select>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Artist name</div>
                    <div class="item-input"><input type="text" class="albumArtist" value="" disabled>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Quanitity</div>
                    <div class="item-input"><input type="text" class="albumQuanitity" value="" disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Price</div>
                    <div class="item-input"><input type="text" class="albumPrice" value="" disabled>
                    </div>
                </div>

                <div class="modal-item">
                    <div class="item-header">Image</div>
                    <div class="item-input img-container">
                        <img width="100%" src="data/imgAlbum/" alt="img">
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Describe</div>
                    <div class="item-input"><textarea cols="30" class="albumDescribe" rows="6" disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-right ">
            <div class="title-list">
                <div class="title-placeholder">
                    <div class="title" style="padding-right: 10px;">No.</div>
                    <div class="title" style="padding-right: 15px;">SID</div>
                    <div class="title" style="padding-right: 15px;">Song name</div>
                    <div class="title" style="padding-right: 10px;">Song file</div>
                </div>
            </div>
            <div class="list">

                <div class="placeholder">
                    <div class="info">
                        <div class="item">

                        </div>
                        <div class="item">

                        </div>
                        <div class="item">

                        </div>
                        <div class="item">

                        </div>
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
                <div class="delete-button" onclick="deleteAlbum(<?= $album['maAlbum'] ?>)">
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