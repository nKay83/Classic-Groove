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
