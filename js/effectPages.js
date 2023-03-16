let changeInputColorRange = () => {
  let input = document.querySelector(".seek_slider");
  let value = ((input.value - input.min) / (input.max - input.min)) * 100;
  input.style.background =
    "linear-gradient(to right, #f2623e 0%, #f2623e " +
    value +
    "%, #fff " +
    value +
    "%, white 100%)";
};

$("#purchaseHistory .row").click(function () {
  $(this).children(".details").slideToggle(500);
});

