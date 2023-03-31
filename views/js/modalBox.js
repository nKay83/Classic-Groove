function openEditbox() {
    var editButton = document.querySelector("#productManager .edit-button");
    var editAlbum = document.querySelector("#edit-album");
    editAlbum.style.display = 'block';
};
function openDetailbox() {
    var detailButton = document.querySelector("#productManager .list .placeholder .info .item:last-child");
    var detailAlbum = document.querySelector("#detail-album");
    detailAlbum.style.display = 'block';
};
function openNewbox() {
    var newButton = document.querySelector("#productManager .new-button");
    var newAlbum = document.querySelector("#new-album");
    newAlbum.style.display = 'block';
};
function openRestockbox() {
    var restockButton = document.querySelector("#productManager .restock-button");
    var restockAlbum = document.querySelector("#restock-album");
    restockAlbum.style.display = 'block';
};

function closeEditbox() {
    var backButton = document.querySelector("#productManager .back-button");
    var editAlbum = document.querySelector("#edit-album");
    editAlbum.style.display = 'none';
};
function closeDetailbox() {
    var backButton = document.querySelector("#productManager .back-button");
    var detailAlbum = document.querySelector("#detail-album");
    detailAlbum.style.display = 'none';
};
function closeNewbox() {
    var backButton = document.querySelector("#productManager .back-button");
    var newAlbum = document.querySelector("#new-album");
    newAlbum.style.display = 'none';
};
function closeRestockbox() {
    var backButton = document.querySelector("#productManager .back-button");
    var restockAlbum = document.querySelector("#restock-album");
    restockAlbum.style.display = 'none';
};