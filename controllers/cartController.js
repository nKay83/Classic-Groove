const addToCart = (albumID) => {
  $.ajax({
    url: "util/cart.php",
    type: "POST",
    data: { albumID: albumID, action: "addToCart" },
    success: function (res) {
      if (res == "Success") {
      } else {
        alert(res);
      }
    },
  });
};

const deleteFromCart = async (albumID, input) => {
  await deleteByAlbumID(albumID);
  input.closest(".product-placeholder").remove();
};
const deleteByAlbumID = (albumID) => {
  $.ajax({
    url: "util/cart.php?albumID=" + albumID,
    type: "DELETE",
    success: function (res) {
      if (res != "Success") alert(res);
    },
  });
};
const checkChangeQuantity = (input, change) => {
  let currentQuantityInput = input
    .closest(".product-placeholder")
    .querySelector("input.quantity-info");
  let currentQuantity = parseInt(currentQuantityInput.value);
  if (currentQuantity == 99 && change == 1) return null;
  if (currentQuantity == 1 && change == -1) return null;
  if (currentQuantity > 99) {
    currentQuantityInput.value = 99;
    currentQuantity = 99;
  }
  if (currentQuantity < 1) {
    currentQuantityInput.value = 1;
    currentQuantity = 1;
  }
  let quantity = currentQuantity + change;
  currentQuantityInput.value = quantity;
  return quantity;
};

const updateTotalPrice = (input, quantity) => {
  let eachPriceInput = input
    .closest(".product-placeholder")
    .querySelector(".each")
    .innerHTML.substring(1);
  let eachPrice = parseFloat(eachPriceInput);
  let priceTotalInput = input
    .closest(".product-placeholder")
    .querySelector(".total");
  total = (Math.round(quantity * eachPrice * 100) / 100).toFixed(2);
  priceTotalInput.innerHTML = "$" + total;
};

const changeQuantity = (albumID, change, input) => {
  let quantity = checkChangeQuantity(input, change);
  if (quantity == null) return;
  updateTotalPrice(input, quantity);
  $.ajax({
    url: "util/cart.php?quantity=" + quantity + "&" + "albumID=" + albumID,
    type: "PUT",
    success: function (res) {
      if (res != "Success") alert(res);
    },
  });
};
const summary = (input) => {
  let price = parseFloat(
    input
      .closest(".product-placeholder")
      .querySelector(".total")
      .innerHTML.substring(1)
  );
  let subtotalInput = document.querySelector(".subtotal");
  let currentPrice = parseFloat(subtotalInput.innerHTML.substring(1));
  let shippingInput = document.querySelector(".shipping");
  let currentShip = parseFloat(shippingInput.innerHTML.substring(1));
  let totalInput = document.querySelector(".total-final");
  if (input.checked) {
    currentPrice += price;
    currentShip += 15;
  } else {
    currentPrice -= price;
    currentShip -= 15;
  }
  total = (Math.round((currentPrice + currentShip) * 100) / 100).toFixed(2);
  currentPrice = (Math.round(currentPrice * 100) / 100).toFixed(2);
  currentShip = (Math.round(currentShip * 100) / 100).toFixed(2);
  subtotalInput.innerHTML = "$" + currentPrice;
  shippingInput.innerHTML = "$" + currentShip;
  totalInput.innerHTML = "$" + total;
};

