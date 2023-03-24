$(document).ready(() => {
  loadPageByAjax("home");
});

const loadPageByAjax = (pageTarget) => {
  $.ajax({
    url: "pages/user/content.php",
    type: "POST",
    data: { page: pageTarget },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
    },
  });
};
const loadProductDetailsByAjax = (albumID) => {
  $.ajax({
    url: "pages/user/productDetails.php",
    type: "POST",
    data: { albumID: albumID },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
    },
  });
};
let selectMenu = (selectedTab) => {
  let tabActive = document.querySelector("#header .tab-title.active")
  if (tabActive != null)
    tabActive.classList.remove("active");
  selectedTab.classList.add("active");
};
 