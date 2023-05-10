const updateSlide = (slideID) => {
  let imgInput = document.querySelector(".imgSlide");
  let nameInput = document.querySelector(".nameSlide");
  let linkToInput = document.querySelector(".linkToSlide");
  $.ajax({
    url:
      "util/structure.php?slideID=" +
      slideID +
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

const addSlide = () => {
  let imgInput = document.querySelector(".imgSlide");
  let nameInput = document.querySelector(".nameSlide");
  let linkToInput = document.querySelector(".linkToSlide");
  $.ajax({
    url: "util/structure.php",
    type: "POST",
    data: {
      slideName: nameInput.value,
      slideImg: imgInput.src.split("/").pop(),
      slideLinkTo: parseInt(linkToInput.value),
      action: "addSlide",
    },
    success: function (res) {
      if (res != "Success") {
        console.log(res);
      } else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Added successfully!"
        );
      loadPageByAjax("structureManager");
    },
  });
};

const deleteSlide = (slideID) => {
  let choice = confirm("Are you sure to delete this slide?");
  if (!choice) return;
  $.ajax({
    url: "util/structure.php?slideID=" + slideID + "&action=deleteSlide",
    type: "DELETE",
    success: function (res) {
      if (res != "Success") {
        console.log(res);
      } else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Deleted successfully!"
        );
      loadPageByAjax("structureManager");
    },
  });
};
