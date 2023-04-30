const getInfoAlbum = (albumID) => {
  return $.ajax({
    url: "util/albums.php?albumID=" + albumID + "&action=getInfoAlbum",
    type: "GET",
  });
};
const getNewIDSong = () => {
  return $.ajax({
    url: "util/albums.php?action=getNewIDSong",
    type: "GET",
  });
};

const uploadImg = () => {
  let fileInput = document.createElement("input");
  fileInput.type = "file";
  fileInput.click();
  fileInput.onchange = () => {
    let file_data = fileInput.files[0];
    let form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("target_directory", "../data/imgAlbum/");
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
        if (res == "Success") {
          document.querySelector("#edit-album .img-container img").src =
            "data/imgAlbum/" + fileInput.files[0].name;
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
const deleteImg = () => {
  customNotice(
    "fa-sharp fa-light fa-circle-check",
    "Deleted successfully, change to default image!"
  );
  document.querySelector("#edit-album .img-container img").src =
    "data/imgAlbum/" + "default.jfif";
};

const deleteSong = (input) => {
  input.closest(".placeholder").remove();
  formatNumberOrder();
};

const changeSong = (input) => {
  let fileInput = document.createElement("input");
  fileInput.type = "file";
  fileInput.click();
  fileInput.onchange = () => {
    let file_data = fileInput.files[0];
    let form_data = new FormData();
    form_data.append("file", file_data);
    form_data.append("target_directory", "../data/songs/");
    $.ajax({
      url: "util/upload.php",
      type: "POST",
      data: form_data,
      dataType: "script",
      cache: false,
      contentType: false,
      processData: false,
      success: function (res) {
        if (res == "Success") {
          input.closest(".songFile-container").querySelector("span").innerHTML = fileInput.files[0].name;
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
const addBlankSong = async () => {
  let input = document.querySelector("#edit-album .list");
  // let newSongID = await getNewIDSong();
  input.innerHTML += `
    <div class="placeholder">
      <div class="info">
        <div class="item"></div>
        <div class="item">*</div>
        <div class="item input-container">
          <input type="text" value="">
        </div>
        <div class="item input-container songFile-container">
          <span>Please choose</span>
          <input type="button" value="Change" onclick="changeSong(this)">
        </div>
        <div class="item" onclick="deleteSong(this)"><i class="fa-solid fa-xmark-large fa-sm"
              style="color: #f2623e;"></i></div>
      </div>
    </div>
    `;
  formatNumberOrder();
};

const formatNumberOrder = () => {
  let inputs = document.querySelectorAll("#edit-album .list .placeholder");
  inputs.forEach((input, index) => {
    input.querySelector(".info .item:first-child").innerHTML = (index + 1)
      .toString()
      .padStart(2, "0");
  });
};
