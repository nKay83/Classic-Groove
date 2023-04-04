<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'POST':
    switch ($_POST['action']) {
      case 'addToCart':
        $albumID = $_POST['albumID'];
        $userID = $_SESSION['userID'];
        $result = $dp->getAlbumInCart($albumID, $userID);
        if (mysqli_num_rows($result) != 0) {
          echo "Album đã tồn tại trong giỏ hàng!";
        } else {
          $sql = "INSERT INTO giohang
          VALUES ('" . $userID . "'," . $albumID . "," . 1 . ")";
          $result = $dp->excuteQuery($sql);
          if ($result) {
            echo "Đã thêm Album";
          } else {
            echo "Error";
          }
        }
        break;
    }
    break;
  case 'DELETE':
    $albumID = $_GET['albumID'];
    $userID = $_SESSION['userID'];
    $sql = "DELETE FROM giohang WHERE maKhachHang = '" . $userID . "' and maAlbum = " . $albumID;
    $result = $dp->excuteQuery($sql);
    if ($result) {
      echo "Success";
    } else {
      echo "Error";
    }
    break;
}