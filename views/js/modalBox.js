// Album page
function openEditalbum() {
  var editAlbum = document.querySelector("#edit-album");
  editAlbum.style.display = "block";
}
const openDetailalbum = async (albumID) => {
  let infoAlbum = JSON.parse(await getInfoAlbum(albumID));
  let songs = JSON.parse(await getSongs(albumID));
  var detailAlbum = document.querySelector("#detail-album");
  detailAlbum.style.display = "block";
  const inputAlbumID = document.querySelector("#detail-album .albumID");
  const inputAlbumName = document.querySelector("#detail-album .albumName");
  const inputAlbumKind = document.querySelector("#detail-album .albumKind");
  const inputAlbumArtist = document.querySelector(
    "#detail-album .albumArtist"
  );
  const inputAlbumQuantity = document.querySelector(
    "#detail-album .albumQuantity"
  );
  const inputAlbumPrice = document.querySelector("#detail-album .albumPrice");
  const inputAlbumImg = document.querySelector("#detail-album .albumImg");
  const inputAlbumDescribe = document.querySelector(
    "#detail-album .albumDescribe"
  );

  inputAlbumID.value = infoAlbum.maAlbum;
  inputAlbumName.value = infoAlbum.tenAlbum;
  inputAlbumKind.value = infoAlbum.theLoai;
  inputAlbumArtist.value = infoAlbum.tacGia;
  inputAlbumQuantity.value = infoAlbum.soLuong;
  inputAlbumPrice.value = infoAlbum.gia;
  inputAlbumImg.value = infoAlbum.hinh;
  inputAlbumDescribe.value = infoAlbum.moTa;
};
function openNewalbum() {
  var newAlbum = document.querySelector("#new-album");
  newAlbum.style.display = "block";
}
function openRestockalbum() {
  var restockAlbum = document.querySelector("#restock-album");
  restockAlbum.style.display = "block";
}

function closeEditalbum() {
  var editAlbum = document.querySelector("#edit-album");
  editAlbum.style.display = "none";
}

function closeDetailalbum() {
  var detailalbum = document.querySelector("#detail-album");
  detailalbum.style.display = "none";
}
function closeNewalbum() {
  var newAlbum = document.querySelector("#new-album");
  newAlbum.style.display = "none";
}
function closeRestockalbum() {
  var restockAlbum = document.querySelector("#restock-album");
  restockAlbum.style.display = "none";
}

// Order page

function openEditorder() {
  var editOrder = document.querySelector("#edit-order");
  editOrder.style.display = "block";
}

function openDetailorder() {
  var detailOrder = document.querySelector("#detail-order");
  detailOrder.style.display = "block";
}

function closeEditorder() {
  var editOrder = document.querySelector("#edit-order");
  editOrder.style.display = "none";
}

function closeDetailorder() {
  var detailOrder = document.querySelector("#detail-order");
  detailOrder.style.display = "none";
}

// Account page

function openEditAccount() {
  var editAccount = document.querySelector("#edit-account");
  editAccount.style.display = "block";
}
function openDetailAccount() {
  var detailAccount = document.querySelector("#detail-account");
  detailAccount.style.display = "block";
}
function openNewAccount() {
  var newAccount = document.querySelector("#new-account");
  newAccount.style.display = "block";
}

function closeEditAccount() {
  var editAccount = document.querySelector("#edit-account");
  editAccount.style.display = "none";
}
function closeDetailAccount() {
  var detailAccount = document.querySelector("#detail-account");
  detailAccount.style.display = "none";
}
function closeNewAccount() {
  var newAccount = document.querySelector("#new-account");
  newAccount.style.display = "none";
}

// Distributor page
