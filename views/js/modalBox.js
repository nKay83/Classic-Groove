// Album page

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
  const InputOrderID = document.querySelector("#edit-order .orderId");
  const InputOrderAccount = document.querySelector("#edit-order .orderAccount");
  const InputOrderDate = document.querySelector("#edit-order .orderDate");
  const InputOrderPrice = document.querySelector("#edit-order .orderPrice");
  const InputOrderDiscount = document.querySelector(
    "#edit-order .orderDiscount"
  );
  const InputOrderStatus = document.querySelector("#edit-order .orderStatus");
  const InputOrderAddress = document.querySelector("#edit-order .orderAddress");

  InputOrderID.value = orderInfo.maHoaDon;
  InputOrderAccount.value = orderInfo.khachHang;
  InputOrderDate.value = new Date(orderInfo.thoiGianDat).toLocaleDateString(
    "en-GB"
  );
  console.log(orderInfo);
  InputOrderPrice.value = orderInfo.tongTien;
  if (orderInfo.khuyenMai == null) orderInfo.khuyenMai = "No discount";
  InputOrderDiscount.value = orderInfo.khuyenMai;
  InputOrderStatus.value = orderInfo.trangThai;
  InputOrderAddress.value = orderInfo.diaChiGiaoHang;
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
  const InputOrderStatus = document.querySelector("#detail-order .orderStatus");
  const InputOrderAddress = document.querySelector(
    "#detail-order .orderAddress"
  );

  InputOrderID.value = orderInfo.maHoaDon;
  InputOrderAccount.value = orderInfo.khachHang;
  InputOrderDate.value = new Date(orderInfo.thoiGianDat).toLocaleDateString(
    "en-GB"
  );
  console.log(orderInfo);
  InputOrderPrice.value = orderInfo.tongTien;
  if (orderInfo.khuyenMai == null) orderInfo.khuyenMai = "No discount";
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
