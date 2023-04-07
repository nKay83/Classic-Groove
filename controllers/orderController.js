const order = async () => {
  if (!checkMyCart()) return;
  let total = getTotal();
  let address = document.querySelector("#mycart #checkout-address").value;
  await createOrder(address, total);
  await deleteFromOrder();
  alert("Đặt hàng thành công");
};

const getTotal = () => {
  let totalInput = document.querySelector(".total-final");
  let total = parseFloat(totalInput.innerHTML.substring(1));
  return total;
};

const createOrder = async (address, total) => {
  await $.ajax({
    url: "util/order.php",
    type: "POST",
    data: { address: address, total: total, action: "createOrder" },
    success: function (res) {
      if (res != "Success") alert(res);
    },
  });
};
const checkMyCart = () => {
  let albums = document.querySelectorAll(
    "#mycart .check-button input[type='checkbox']:checked"
  );
  let address = document.querySelector("#mycart #checkout-address");
  if (albums.length == 0) {
    alert("Chưa chọn Album!");
    return false;
  }
  if (address.value == "") {
    alert("Chưa nhập địa chỉ!");
    address.focus();
    return false;
  }
  return true;
};

const deleteFromOrder = async () => {
  let albums = document.querySelectorAll(
    "#mycart .check-button input[type='checkbox']:checked"
  );
  for (let album of albums) {
    await deleteByAlbumID(parseInt(album.value));
    album.closest(".product-placeholder").remove();
  }
};
