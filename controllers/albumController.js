let listSongRemove = [];
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
const getSongByAlbumID = (albumID) => {
  return $.ajax({
    url: "util/albums.php?albumID=" + albumID + "&action=getSongByAlbum",
    type: "GET",
  });
};
const updateSongInAlbum = (songID, songName, linkFile) => {
  return $.ajax({
    url:
      "util/albums.php?songID=" +
      parseInt(songID) +
      "&songName=" +
      songName +
      "&linkFile=" +
      linkFile +
      "&action=updateSongInAlbum",
    type: "PUT",
  });
};
const deleteSongInAlbum = (albumID, songID) => {
  $.ajax({
    url:
      "util/albums.php?albumID=" +
      albumID +
      "&songID=" +
      songID +
      "&action=deleteSongInAlbum",
    type: "DELETE",
  });
};
const addSongInAlbum = async (albumID, songName, linkFile) => {
  let songID = await getNewIDSong();
  $.ajax({
    url: "util/albums.php",
    type: "POST",
    data: {
      albumID: albumID,
      songID: songID,
      songName: songName,
      linkFile: linkFile,
      action: "addSongInAlbum",
    },
  });
};

const addSongExistInAlbum = (albumID, songID) => {
  $.ajax({
    url: "util/albums.php",
    type: "POST",
    data: {
      albumID: albumID,
      songID: parseInt(songID),
      action: "addSongExistInAlbum",
    },
  });
};

const updateAlbumInfo = (
  albumID,
  albumName,
  albumKind,
  albumArtist,
  albumPrice,
  albumImage,
  albumDescribe
) => {
  console.log(
    albumID,
    albumName,
    albumKind,
    albumArtist,
    albumPrice,
    albumImage,
    albumDescribe
  );
  $.ajax({
    url:
      "util/albums.php?albumID=" +
      albumID +
      "&albumName=" +
      albumName +
      "&albumKind=" +
      parseInt(albumKind) +
      "&albumArtist=" +
      albumArtist +
      "&albumPrice=" +
      albumPrice +
      "&albumImage=" +
      albumImage +
      "&albumDescribe=" +
      albumDescribe.replace(/['"]/g, '\\$&') +
      "&action=updateAlbumInfo",
    type: "PUT",
    success: function (res) {
      console.log(res);
    },
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
        if (res) {
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
        if (res) {
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

const updateAlbum = async (AbID) => {
  let albumName = document.querySelector("#edit-album .albumName").value;
  let albumKind = document.querySelector("#edit-album .albumKind").value;
  let albumArtist = document.querySelector("#edit-album .albumArtist").value;
  let albumPrice = document.querySelector("#edit-album .albumPrice").value;
  let albumImageRaw = document.querySelector(
    "#edit-album .img-container img"
  ).src;
  let albumImage = albumImageRaw.split("/").pop();
  let albumDescription = document.querySelector(
    "#edit-album .albumDescribe"
  ).value;
  updateAlbumInfo(
    AbID,
    albumName,
    albumKind,
    albumArtist,
    albumPrice,
    albumImage,
    albumDescription
  );
  let songsOld = JSON.parse(await getSongByAlbumID(AbID));
  let songsNewsInput = document.querySelectorAll("#edit-album .list .info");
  let songsNews = [];
  songsNewsInput.forEach((song) => {
    let songID = song.querySelector(".item:nth-child(2)").innerHTML.trim();
    let songName = song.querySelector(".item:nth-child(3) input").value.trim();
    let songFile = song
      .querySelector(".item:nth-child(4) span")
      .innerHTML.trim();
    songsNews.push({
      maBaiHat: songID,
      tenBaiHat: songName,
      linkFile: songFile.replace(".mp3", ""),
    });
  });
  //delete song
  for (let song of songsOld) {
    let isExist = false;
    for (let songNew of songsNews) {
      if (song.maBaiHat == songNew.maBaiHat) {
        isExist = true;
        break;
      }
    }
    if (!isExist) {
      deleteSongInAlbum(AbID, song.maBaiHat);
    }
  }
  //update song
  for (let song of songsNews) {
    let isDiff = false;
    for (let songOld of songsOld) {
      if (song.maBaiHat == songOld.maBaiHat) {
        if (
          song.tenBaiHat != songOld.tenBaiHat ||
          song.linkFile != songOld.linkFile
        ) {
          isDiff = true;
          break;
        }
      }
    }
    if (isDiff) {
      updateSongInAlbum(song.maBaiHat, song.tenBaiHat, song.linkFile);
    }
  }
  //add new song
  for (let song of songsNews) {
    if (song.maBaiHat == "*") {
      if (song.tenBaiHat == "" && song.linkFile == "Please choose") {
        continue;
      }
      addSongInAlbum(AbID, song.tenBaiHat, song.linkFile);
    }
  }
  //add exist song in album
  for (let song of songsNews) {
    if (song.maBaiHat == "*") {
      continue;
    }
    songExistNotInAlbum = true;
    for (let songOld of songsOld) {
      if (song.maBaiHat == songOld.maBaiHat) {
        songExistNotInAlbum = false;
        break;
      }
    }
    if (songExistNotInAlbum) {
      addSongExistInAlbum(AbID, song.maBaiHat);
    }
  }
  customNotice("fa-sharp fa-light fa-circle-check", "Update successfully!");
  loadModalBoxByAjax("detailAlbum", AbID);
};
