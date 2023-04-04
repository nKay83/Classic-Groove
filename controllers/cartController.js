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
