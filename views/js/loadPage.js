$(document).ready(async () => {
  let url = window.location.href;
  if (url.indexOf("admin.php") != -1) {
    if ((await isLogin()) == 1 && (await getRole()) != "1") {
      loadPageByAjax("statistic");
    } else {
      window.location.href = "index.php";
    }
  } else if (url.indexOf("index.php") != -1) {
    if ((await isLogin()) == 1) {
      if ((await getRole()) == 1) {
        loadHomeByAjax(1);
      } else {
        logout();
      }
    } else {
      loadHomeByAjax(1);
    }
  } else {
    loadHomeByAjax(1);
  }
});

const loadPageByAjax = async (pageTarget) => {
  $.ajax({
    url: "views/pages/user/content.php",
    type: "POST",
    data: { page: pageTarget },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
      if (pageTarget == "myAccount") setUserInfo();
      if (pageTarget == "statistic") {
        statistic1();
        statistic2();
        statistic3();
      }
    },
  });
};
const loadHomeByAjax = (currentPage) => {
  let name = document.querySelector("#search #search-btn").value;
  let category = document.querySelector("#search #drop-menu-btn").value;
  let price = document.querySelector("#search #price-ptn ").value;
  $.ajax({
    url: "views/pages/user/home.php",
    type: "POST",
    data: {
      name: name,
      category: category,
      price: price,
      currentPage: currentPage,
    },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
    },
  });
};
const loadAlbumByAjax = () => {
  let name = document.querySelector(".search-bar .search-input input").value;
  let category = document.querySelector(
    ".search-bar .filter-input select"
  ).value;
  let priceStartInput = document.querySelector(
    ".search-bar .price-begin input"
  );
  let priceEndInput = document.querySelector(".search-bar .price-end input");
  if (priceStartInput.value != "" && isNaN(priceStartInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Start price must be a number!"
    );
    priceStartInput.focus();
    return;
  }
  if (priceEndInput.value != "" && isNaN(priceEndInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "End price must be a number!"
    );
    priceEndInput.focus();
    return;
  }
  if (
    priceStartInput.value != "" &&
    priceEndInput.value != "" &&
    parseFloat(priceStartInput.value) > parseFloat(priceEndInput.value)
  ) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Start price must be smaller than end price!"
    );
    priceStartInput.focus();
    return;
  }
  if (
    (priceStartInput.value != "" &&
      priceEndInput.value != "" &&
      parseFloat(priceStartInput.value) < 0) ||
    parseFloat(priceEndInput.value) < 0
  ) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Price must be more than or equal 0!"
    );
    priceStartInput.focus();
    return;
  }
  let priceStart;
  let priceEnd;
  if (priceStartInput.value == "" || priceEndInput.value == "") {
    if (priceStartInput.value == "") {
      priceStart = -1;
      priceEnd = priceEndInput.value;
    }
    if (priceEndInput.value == "") {
      priceStart = priceStartInput.value;
      priceEnd = -1;
    }
  } else {
    priceStart = priceStartInput.value;
    priceEnd = priceEndInput.value;
  }
  $.ajax({
    url: "views/pages/admin/productManager.php",
    type: "POST",
    data: {
      name: name,
      category: parseFloat(category),
      priceStart: priceStart,
      priceEnd: priceEnd,
    },
    dataType: "html",
    success: function (data) {
      document.querySelector("#content").innerHTML = data;
      document.querySelector(".search-bar .search-input input").value = name;

      document.querySelector(".search-bar .filter-input select").value =
        category;
      if (priceStart != -1) {
        document.querySelector(".search-bar .price-begin input").value =
          priceStart;
      }
      if (priceEnd != -1) {
        document.querySelector(".search-bar .price-end input").value = priceEnd;
      }
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

const loadModalBoxByAjax = (modalBoxTarget, id) => {
  $.ajax({
    url: "views/pages/admin/modalBox.php",
    type: "POST",
    data: { modalBox: modalBoxTarget, id: id },
    dataType: "html",
    success: function (data) {
      document.querySelector("#modal-box").innerHTML = data;
      if (modalBoxTarget == "editAccount") setAccountInfo();
      else if (modalBoxTarget == "editOrder") setOrderInfo();
    },
  });
};
const tabNoticeNotNow = (input) => {
  input.parentElement.parentElement.style.display = "none";
};
const tabNoticeLogIn = (input) => {
  tabNoticeNotNow(input);
  loadLoginByAjax("signIn");
};
const hideTabNotice = () => {
  let tabNoticeAll = document.querySelectorAll("#header .tab-notice");
  tabNoticeAll.forEach((element) => {
    element.style.display = "none";
  });
};
const removeColorTab = () => {
  let tabActive = document.querySelector("#header .tab-title.active");
  if (tabActive != null) tabActive.classList.remove("active");
};
const selectMenu = async (selectedTab, pageTarget) => {
  hideTabNotice();
  let loginPage = document.querySelector("#login");
  if (!(await isLogin()) && pageTarget != "home") {
    if (!loginPage) {
      selectedTab.childNodes[5].style.display = "block";
    }
    return;
  }
  removeColorTab();
  selectedTab.classList.add("active");
  if (pageTarget == "home") return;
  loadPageByAjax(pageTarget);
};
const selectMenuFooter = () => {
  hideTabNotice();
  removeColorTab();
  loadPageByAjax("footer");
};
const selectMenuAdmin = (selectedTab, pageTarget) => {
  removeColorTab();
  selectedTab.classList.add("active");
  loadPageByAjax(pageTarget);
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
$("#content").on("keypress", "#login #password-field", function (e) {
  if (e.which == 13) {
    login();
  }
});
