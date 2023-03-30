<?php
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
            if ($user['matKhau'] != $password) {
              echo "Sai mật khẩu";
            } else {
              session_start();
              $_SESSION['userID'] = $user['maNguoiDung'];
              $_SESSION['userName'] = $user['hoTen'];
              if ($user['vaiTro'] == 1) {
                echo "cus";
              } else {
                echo "emp";
              }
            }
          }
        }
        break;
    }
}
?>