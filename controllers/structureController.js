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
const uploadImgSlide = () => {
  let fileInput = document.createElement("input");
  fileInput.type = "file";
  fileInput.click();
  fileInput.onchange = () => {
    let file_data = fileInput.files[0];
    let form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("target_directory", "../data/slideShow/");
    //Ajax to send file to upload
    $.ajax({
      url: "util/upload.php",
      type: "POST",
      data: form_data,
      dataType: "script",
      cache: false,
      contentType: false,
      processData: false,
      success: function (res) {
        if (res) {
          document.querySelector(".top .img-placeholder img").src =
            "data/slideShow/" + fileInput.files[0].name;
          customNotice(
            "fa-sharp fa-light fa-circle-check",
            "Uploaded successfully"
          );
        } else
          customNotice(
            "fa-sharp fa-light fa-circle-exclamation",
            "Upload failed"
          );
      },
    });
  };
};