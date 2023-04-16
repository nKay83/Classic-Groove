// Album page
let selectAlbum = null;
let infoAlbum = null;
let songs = null;
const openEditalbum = async () => {
  console.log(infoAlbum);
  console.log(songs);
  let editAlbum = document.querySelector("#edit-album");
  editAlbum.style.display = "block";
  const inputAlbumID = document.querySelector("#edit-album .albumID");
  const inputAlbumName = document.querySelector("#edit-album .albumName");
  const inputAlbumKind = document.querySelector("#edit-album .albumKind");
  const inputAlbumArtist = document.querySelector("#edit-album .albumArtist");
  const inputAlbumQuanitity = document.querySelector(
    "#edit-album .albumQuanitity"
  );
  const inputAlbumPrice = document.querySelector("#edit-album .albumPrice");
  const inputAlbumImg = document.querySelector("#edit-album .albumImg");
  const inputAlbumDescribe = document.querySelector(
    "#edit-album .albumDescribe"
  );
  inputAlbumID.value = infoAlbum.maAlbum;
  inputAlbumName.value = infoAlbum.tenAlbum;
  inputAlbumKind.value = infoAlbum.theLoai;
  inputAlbumArtist.value = infoAlbum.tacGia;
  inputAlbumQuanitity.value = infoAlbum.soLuong;
  inputAlbumPrice.value = infoAlbum.gia;
  inputAlbumImg.value = infoAlbum.hinh;
  inputAlbumDescribe.value = infoAlbum.moTa;
};
const openDetailalbum = async (albumID) => {
  selectAlbum = albumID;
  infoAlbum = JSON.parse(await getInfoAlbum(selectAlbum));
  songs = JSON.parse(await getSongs(selectAlbum));
  let detailAlbum = document.querySelector("#detail-album");
  detailAlbum.style.display = "block";
  const inputAlbumID = document.querySelector("#detail-album .albumID");
  const inputAlbumName = document.querySelector("#detail-album .albumName");
  const inputAlbumKind = document.querySelector("#detail-album .albumKind");
  const inputAlbumArtist = document.querySelector("#detail-album .albumArtist");
  const inputAlbumQuanitity = document.querySelector(
    "#detail-album .albumQuanitity"
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
  inputAlbumQuanitity.value = infoAlbum.soLuong;
  inputAlbumPrice.value = infoAlbum.gia;
  inputAlbumImg.value = infoAlbum.hinh;
  inputAlbumDescribe.value = infoAlbum.moTa;
};
function openNewalbum() {
  let newAlbum = document.querySelector("#new-album");
  newAlbum.style.display = "block";
}
function openRestockalbum() {
  let restockAlbum = document.querySelector("#restock-album");
  restockAlbum.style.display = "block";
}

function closeEditalbum() {
  let editAlbum = document.querySelector("#edit-album");
  editAlbum.style.display = "none";
}

function closeDetailalbum() {
  let detailalbum = document.querySelector("#detail-album");
  detailalbum.style.display = "none";
}
function closeNewalbum() {
  let newAlbum = document.querySelector("#new-album");
  newAlbum.style.display = "none";
}
function closeRestockalbum() {
  let restockAlbum = document.querySelector("#restock-album");
  restockAlbum.style.display = "none";
}

// Order page
let selectOrder = null;
let orderInfo = null;
let albumsInOrder = null;
function openEditorder() {
  let editOrder = document.querySelector("#edit-order");
  editOrder.style.display = "block";
}

const openDetailorder = async (orderID) => {
  selectOrder = orderID;
  orderInfo = JSON.parse(await getOrderInfo(selectOrder));
  albumsInOrder = JSON.parse(await getAlbumsInOrder(selectOrder));
  let detailOrder = document.querySelector("#detail-order");
  detailOrder.style.display = "block";
  const InputOrderID = document.querySelector("#detail-order .orderId");
  const InputOrderAccount = document.querySelector(
    "#detail-order .orderAccount"
  );
  const InputOrderDate = document.querySelector("#detail-order .orderDate");
  const InputOrderPrice = document.querySelector("#detail-order .orderPrice");
  const InputOrderDiscount = document.querySelector(
    "#detail-order .orderDiscount"
  );
  const InputOrderStatus = document.querySelector(
    "#detail-order .orderStatus"
  );
  const InputOrderAddress = document.querySelector(
    "#detail-order .orderAddress"
  );

  InputOrderID.value = orderInfo.maHoaDon;
  InputOrderAccount.value = orderInfo.khachHang;
  InputOrderDate.value = new Date(orderInfo.thoiGianDat).toLocaleDateString(
    "en-GB"
  );
  console.log(orderInfo)
  InputOrderPrice.value = orderInfo.tongTien;
  if(orderInfo.khuyenMai == null) orderInfo.khuyenMai = "No discount";
  InputOrderDiscount.value = orderInfo.khuyenMai;
  InputOrderStatus.value = orderInfo.trangThai;
  InputOrderAddress.value = orderInfo.diaChiGiaoHang;
};

function closeEditorder() {
  let editOrder = document.querySelector("#edit-order");
  editOrder.style.display = "none";
}

function closeDetailorder() {
  let detailOrder = document.querySelector("#detail-order");
  detailOrder.style.display = "none";
}

// Account page

function openEditAccount() {
  let editAccount = document.querySelector("#edit-account");
  editAccount.style.display = "block";
}
function openDetailAccount() {
  let detailAccount = document.querySelector("#detail-account");
  detailAccount.style.display = "block";
}
function openNewAccount() {
  let newAccount = document.querySelector("#new-account");
  newAccount.style.display = "block";
}

function closeEditAccount() {
  let editAccount = document.querySelector("#edit-account");
  editAccount.style.display = "none";
}
function closeDetailAccount() {
  let detailAccount = document.querySelector("#detail-account");
  detailAccount.style.display = "none";
}
function closeNewAccount() {
  let newAccount = document.querySelector("#new-account");
  newAccount.style.display = "none";
}

// Distributor page
