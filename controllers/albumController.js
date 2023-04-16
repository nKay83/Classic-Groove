const getInfoAlbum = (albumID) => {
  return $.ajax({
    url: "util/albums.php?albumID=" + albumID + "&action=getInfoAlbum",
    type: "GET",
  });
};
const getSongs = (albumID) => {
  return $.ajax({
    url: "util/albums.php?albumID=" + albumID + "&action=getSongs",
    type: "GET",
  });
};