let orderStatus = null;
let isOrderDiff = false;
const setOrderInfo = () => {
  orderStatus = document.querySelector("#edit-order .orderStatus").value;
};
const isOrderInfoChange = () => {
  let saveBtn = document.querySelector("#edit-order .btnOrderSave");
  if (orderStatus == document.querySelector("#edit-order .orderStatus").value) {
    saveBtn.style.cursor = "no-drop";
    saveBtn.style.opacity = "0.5";
    isAccountDiff = false;
  } else {
    saveBtn.style.cursor = "pointer";
    saveBtn.style.opacity = "1";
    isAccountDiff = true;
  }
};
const updateOrder = () => {
  if (!isOrderDiff) return;
  setOrderInfo();
  $.ajax({
    url: "util/order.php?status=" + orderStatus + "&action=updateOrder",
    type: "PUT",
    success: function (res) {
      if (res != "Success") alert(res);
      else {
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Update successfully!"
        );
        isOrderInfoChange();
      }
    },
  });
};
