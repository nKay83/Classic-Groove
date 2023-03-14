$(document).ready(() => {
  loadHomePageByAjax();
});

const loadHomePageByAjax = () => {
  $.ajax({
    url: "pages/user/content.php",
    type: "POST",
    data: { page: "home" },
    dataType: "html",
    success: function (data) {
      // console.log(data);
      document.querySelector("#content").innerHTML = data;
    },
  });
  // alert("ajax done!")
};
