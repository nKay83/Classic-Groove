const getDetailSlide = (slideID) => {
  return $.ajax({
    url: "util/structure.php?slideID=" + slideID + "&action=getDetailSlide",
    type: "GET",
  });
};

const loadDetailSlide = async (slideID) => {
  console.log(slideID);
  let idInput = document.querySelector(".idSlide");
  let imgInput = document.querySelector(".imgSlide");
  let nameInput = document.querySelector(".nameSlide");
  let linkToInput = document.querySelector(".linkToSlide");
  let slideInfo = JSON.parse(await getDetailSlide(slideID));
  imgInput.src = "data/slideShow/" + slideInfo.linkHinh;
  nameInput.value = slideInfo.tenHinh;
  linkToInput.value = slideInfo.linkTo;
  idInput.value = slideID;
};
const updateSlide = () => {
  let idInput = document.querySelector(".idSlide");
  let imgInput = document.querySelector(".imgSlide");
  let nameInput = document.querySelector(".nameSlide");
  let linkToInput = document.querySelector(".linkToSlide");
  console.log(imgInput.src.split("/").pop());
  $.ajax({
    url:
      "util/structure.php?slideID=" +
      idInput.value +
      "&slideName=" +
      nameInput.value +
      "&slideImg=" +
      imgInput.src.split("/").pop() +
      "&slideLinkTo=" +
      parseInt(linkToInput.value) +
      "&action=updateSlide",
    type: "PUT",

    success: function (res) {
      if (res != "Success") {
        console.log(res);
      } else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Update successfully!"
        );
      loadPageByAjax("structureManager");
    },
  });
};
