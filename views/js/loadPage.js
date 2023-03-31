$(document).ready(() => {
  loadHomeByAjax("", 0, "0");
});

const loadPageByAjax = (pageTarget) => {
  $.ajax({
    url: "views/pages/user/content.php",
    type: "POST",
    data: { page: pageTarget },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
    },
  });
};
const loadHomeByAjax = (name, category, price) => {
  $.ajax({
    url: "views/pages/user/home.php",
    type: "POST",
    data: { name: name, category: category, price: price },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
    },
  });
};
const loadProductDetailsByAjax = (albumID) => {
  $.ajax({
    url: "views/pages/user/productDetails.php",
    type: "POST",
    data: { albumID: albumID },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
    },
  });
};
let selectMenu = (selectedTab) => {
  let tabActive = document.querySelector("#header .tab-title.active");
  if (tabActive != null) tabActive.classList.remove("active");
  selectedTab.classList.add("active");
};

const loadLoginByAjax = (pageTarget) => {
  const login = document.querySelector("#login");
  if (login == null) {
    $.ajax({
      url: "views/pages/user/content.php",
      type: "POST",
      data: { page: "login" },
      dataType: "html",
      success: function (data) {
        document.querySelector("#content").innerHTML = data;
        if (pageTarget == "signUp") {
          document.querySelector("#content").innerHTML = data;
          const poster = document.querySelector("#login .poster");
          poster.style.transform = "translateX(-100%)";
          poster.style.backgroundPosition = "left";
          const left = document.querySelector("#login .left");
          left.style.transform = "translateX(50%)";
          left.style.zIndex = "1";
          left.style.opacity = "0";
          const right = document.querySelector("#login .right");
          right.style.transform = "translateX(100%)";
          right.style.opacity = "1";
          right.style.zIndex = "2";
        }
      },
    });
  } else {
    if (pageTarget == "signUp") {
      const poster = document.querySelector("#login .poster");
      poster.style.transform = "translateX(-100%)";
      poster.style.backgroundPosition = "left";
      const left = document.querySelector("#login .left");
      left.style.transform = "translateX(50%)";
      left.style.zIndex = "1";
      left.style.opacity = "0";
      const right = document.querySelector("#login .right");
      right.style.transform = "translateX(100%)";
      right.style.opacity = "1";
      right.style.zIndex = "2";
    } else {
      const poster = document.querySelector("#login .poster");
      poster.style.transform = "translateX(0)";
      poster.style.backgroundPosition = "right";
      const left = document.querySelector("#login .left");
      left.style.transform = "translateX(0)";
      left.style.zIndex = "2";
      left.style.opacity = "1";
      const right = document.querySelector("#login .right");
      right.style.transform = "translateX(50%)";
      right.style.zIndex = "1";
      right.style.opacity = "0";
    }
  }
};

const filter = () => {
  let category = parseInt(document.querySelector("#drop-menu-btn").value);
  loadHomeByAjax("", category, "0");
};
