<?php
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'POST':
    switch ($_POST['action']) {
      case 'checkLogin':
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $result = $dp->getUserByUsername($username);
        $sql = "Select hoTen from nguoidung where manguoidung ='" . $username . "'";
        $name = $dp->excuteQuery($sql)->fetch_assoc()["hoTen"];
        if ($result != null) {
          if (mysqli_num_rows($result) == 0) {
            echo "Tài khoản không tồn tại";
          } else {
            $user = $result->fetch_assoc();
            if ($user['matKhau'] != $password) {
              echo "Sai mật khẩu";
            } else {
              session_start();
              $_SESSION['userID'] = $username;
              $_SESSION['userName'] = $name;
              if ($user['vaiTro'] == 1) {
                echo "cus";
              } else {
                echo "emp";
              }
            }
          }
        }
        break;
      case 'checkUsernameExist':
        $username = $_POST['user'];
        $result = $dp->getUserByUsername($username);
        if (mysqli_num_rows($result) != 0) {
          echo true;
        } else {
          echo false;
        }
        break;
      case 'register':
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql1 = "INSERT INTO nguoidung
        VALUES ('" . $username . "','" . $name . "','" . $phone . "', null, null, 'Hoạt động', 'KH')";
        $result1 = $dp->excuteQuery($sql1);
        $sql2 = "INSERT INTO taikhoan
        VALUES ('" . $username . "','" . (new Datetime())->format('Y-m-d') . "','Hoạt động','" . $password . "',1);";
        $result2 = $dp->excuteQuery($sql2);
        if ($result1 && $result2) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
    }
}
?>