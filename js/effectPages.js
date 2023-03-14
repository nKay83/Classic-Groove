$(document).ready(() => {
  selectMenu();
});

let changeInputColorRange = () => {
  let input = document.querySelector(".seek_slider")
  let value = ((input.value - input.min) / (input.max - input.min)) * 100;
  input.style.background =
    "linear-gradient(to right, #f2623e 0%, #f2623e " +
    value +
    "%, #fff " +
    value +
    "%, white 100%)";
};

let selectMenu = () => {
  let tabsTitle = document.querySelectorAll("#header .tab-title");
  tabsTitle[0].classList.remove("active");
  let url = window.location.href;
  if (url.indexOf("favorites") != -1) tabsTitle[1].classList.add("active");
  else if (url.indexOf("myCart") != -1) tabsTitle[2].classList.add("active");
  else if (url.indexOf("myAccount") != -1) tabsTitle[3].classList.add("active");
  else tabsTitle[0].classList.add("active");
};

$("#purchaseHistory .row").click(function () {
  $(this).children(".details").slideToggle(500);
});
