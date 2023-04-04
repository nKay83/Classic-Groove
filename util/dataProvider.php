<?php
class DataProvider
{
  public static function excuteQuery($sql)
  {
    include('connect.php');
    if (!$connection = mysqli_connect($servername, $username, $password, $dbname)) {
      die("couldn't connect to localhost");
    }
    if (!(mysqli_select_db($connection, $dbname))) {
      echo "Khong the ket noi den database";
    }
    if (!(mysqli_query($connection, "set names 'utf8'"))) {
      echo "Khong the set utf8";
    }
    if (!($result = mysqli_query($connection, $sql))) {
      echo "Khong the thuc thi cau truy van";
    }
    if (!(mysqli_close($connection))) {
      echo "Khong the ket noi 4";
    }
    return $result;
  }
  public static function getUserByUsername($username)
  {
    $sql = "select * from taikhoan where username='" . $username . "'";
    return self::excuteQuery($sql);
  }
  public static function getAlbumInCart($albumID, $userID)
  {
    $sql = "SELECT * FROM giohang where maKhachHang = '" . $userID . "' and maAlbum = " . $albumID;
    return self::excuteQuery($sql);
  }
}