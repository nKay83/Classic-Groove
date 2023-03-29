<?php
include("../util/connect.php");
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'POST':
    switch ($_POST['work']) {
      case 'checkLogin':
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql = "select * from nguoidung where username='" . $username . "'";
        $result = $dp->excuteQuery($sql);
        if ($result != null) {
          if (mysqli_num_rows($result) == 0) {
            echo "Tài khoản không tồn tại";
          } else {
            $user = $result->fetch_assoc();
            if ($user['matKhau'] == $password) {
              echo "Đăng nhập thành công";
            } else {
              echo 'Sai mật khẩu';
            }
          }
        }
        break;
    }
}
?>