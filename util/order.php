<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'POST':
    switch ($_POST['action']) {
      case 'createOrder':
        $total = $_POST['total'];
        $address = $_POST['address'];
        $userID = $_SESSION['userID'];
        $sql = "INSERT INTO hoadon
        VALUES (''," . $total . ",'" . (new Datetime())->format('Y-m-d') . "',
        'Đang xử lý','" . $userID . "',null,'" . $address . "')";
        $result = $dp->excuteQuery($sql);
        if ($result) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
    }
    break;
}