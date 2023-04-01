// Album page 

function openEditalbum() {
    var editButton = document.querySelector("#productManager .edit-button");
    var editAlbum = document.querySelector("#edit-album");
    editAlbum.style.display = 'block';
};
function openDetailalbum() {
    var detailButton = document.querySelector("#productManager .list .placeholder .info .item:last-child");
    var detailAlbum = document.querySelector("#detail-album");
    detailAlbum.style.display = 'block';
};
function openNewalbum() {
    var newButton = document.querySelector("#productManager .new-button");
    var newAlbum = document.querySelector("#new-album");
    newAlbum.style.display = 'block';
};
function openRestockalbum() {
    var restockButton = document.querySelector("#productManager .restock-button");
    var restockAlbum = document.querySelector("#restock-album");
    restockAlbum.style.display = 'block';
};

function closeEditalbum() {
    var backButton = document.querySelector("#productManager .back-button");
    var editAlbum = document.querySelector("#edit-album");
    editAlbum.style.display = 'none';
};
function closeDetailalbum() {
    var backButton = document.querySelector("#productManager .back-button");
    var detailAlbum = document.querySelector("#detail-album");
    detailAlbum.style.display = 'none';
};
function closeNewalbum() {
    var backButton = document.querySelector("#productManager .back-button");
    var newAlbum = document.querySelector("#new-album");
    newAlbum.style.display = 'none';
};
function closeRestockalbum() {
    var backButton = document.querySelector("#productManager .back-button");
    var restockAlbum = document.querySelector("#restock-album");
    restockAlbum.style.display = 'none';
};

// Order page

function openEditorder() {
    var editButton = document.querySelector("#orderManager .edit-button");
    var editOrder= document.querySelector("#edit-order");
    editOrder.style.display = 'block';
};
function openDetailorder() {
    var detailButton = document.querySelector("#orderManager  .list .placeholder .info .item:last-child");
    var detailOrder= document.querySelector("#detail-order");
    detailOrder.style.display = 'block';
};
function closeEditorder() {
    var backButton = document.querySelector("#orderManager  .back-button");
    var editOrder= document.querySelector("#edit-order");
    editOrder.style.display = 'none';
};
function closeDetailorder() {
    var backButton = document.querySelector("#orderManager  .back-button");
    var detailOrder= document.querySelector("#detail-order");
    detailOrder.style.display = 'none';
};

// Account page

function openEditAccount() {
    var editButton = document.querySelector("#productManager .edit-button");
    var editAccount = document.querySelector("#edit-account");
    editAccount.style.display = 'block';
};
function openDetailAccount() {
    var detailButton = document.querySelector("#productManager .list .placeholder .info .item:last-child");
    var detailAccount = document.querySelector("#detail-account");
    detailAccount.style.display = 'block';
};
function openNewAccount() {
    var newButton = document.querySelector("#productManager .new-button");
    var newAccount = document.querySelector("#new-account");
    newAccount.style.display = 'block';
};

function closeEditAccount() {
    var backButton = document.querySelector("#productManager .back-button");
    var editAccount = document.querySelector("#edit-account");
    editAccount.style.display = 'none';
};
function closeDetailAccount() {
    var backButton = document.querySelector("#productManager .back-button");
    var detailAccount = document.querySelector("#detail-account");
    detailAccount.style.display = 'none';
};
function closeNewAccount() {
    var backButton = document.querySelector("#productManager .back-button");
    var newAccount = document.querySelector("#new-account");
    newAccount.style.display = 'none';
};
