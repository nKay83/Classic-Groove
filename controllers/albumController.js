const getInfoAlbum = (albumID) => {
  return $.ajax({
    url: "util/albums.php?albumID=" + albumID + "&action=getInfoAlbum",
    type: "GET",
  });
};
const getAllSongs = () => {
  return $.ajax({
    url: "util/albums.php?action=getAllSongs",
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
          input.closest(".songFile-container").querySelector("span").innerHTML =
            fileInput.files[0].name;
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

const addExistingSong = () => {
  let songString = document.querySelector("#my-input").value;

  if (songString == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Please enter song ID or song name!"
    );
    return;
  }
  if (!suggestions.includes(songString)) {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Song not found");
    return;
  }
  let songID = songString.split("-")[0];
  let inputSongs = document.querySelectorAll(
    "#edit-album .list .placeholder .info .item:nth-child(2)"
  );
  for (let i = 0; i < inputSongs.length; i++) {
    if (parseInt(inputSongs[i].innerHTML) == parseInt(songID)) {
      customNotice(
        "fa-sharp fa-light fa-circle-exclamation",
        "Song already exists"
      );
      return;
    }
  }
  let songObj = rawSuggestions.find((song) => song.maBaiHat == songID);
  let input = document.querySelector("#edit-album .list");
  input.innerHTML += `
    <div class="placeholder">
      <div class="info">
        <div class="item"></div>
        <div class="item">${songObj.maBaiHat}</div>
        <div class="item input-container">
          <input type="text" value="${songObj.tenBaiHat}">
        </div>
        <div class="item input-container songFile-container">
          <span>${songObj.linkFile}.mp3</span>
          <input type="button" value="Change" onclick="changeSong(this)">
        </div>
        <div class="item" onclick="deleteSong(this)"><i class="fa-solid fa-xmark-large fa-sm"
              style="color: #f2623e;"></i></div>
      </div>
    </div>
    `;
  formatNumberOrder();
  closeAddExistingSong();
  document.querySelector("#my-input").value = "";
};
const formatNumberOrder = () => {
  let inputs = document.querySelectorAll("#edit-album .list .placeholder");
  inputs.forEach((input, index) => {
    input.querySelector(".info .item:first-child").innerHTML = (index + 1)
      .toString()
      .padStart(2, "0");
  });
};

let suggestions;
let rawSuggestions;

const updateSuggestions = async () => {
  rawSuggestions = JSON.parse(await getAllSongs());
  suggestions = rawSuggestions.map(
    (song) => song.maBaiHat + "-" + song.tenBaiHat
  );
  console.log(suggestions);
};
const suggest = () => {
  const currentValue = event.target.value.toLowerCase();
  if (!currentValue) {
    document.getElementById("suggestion-list").innerHTML = "";
    return;
  }

  // Filter the list of suggestions based on the current input value
  const containingStrings = [];

  for (let i = 0; i < suggestions.length; i++) {
    if (suggestions[i].toLowerCase().includes(currentValue)) {
      containingStrings.push(suggestions[i]);
    }
  }

  // Display the filtered suggestions
  displaySuggestions(containingStrings);
};

// Display the filtered suggestions
function displaySuggestions(suggestions) {
  suggestionList = document.getElementById("suggestion-list");
  suggestionList.innerHTML = "";
  suggestions.forEach(function (suggestion) {
    suggestionList.innerHTML += `<li onclick="chooseSuggestion(this)">${suggestion}</li>`;
  });
}

const chooseSuggestion = (suggestion) => {
  document.querySelector("#my-input").value = suggestion.innerHTML + "";
  document.getElementById("suggestion-list").innerHTML = "";
};
