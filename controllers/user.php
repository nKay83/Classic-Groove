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
        echo json_encode($result->fetch_assoc()); 
        break;
    }
}
?>