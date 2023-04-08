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
        $albums = json_decode($_POST['albums']);
        $hoaDonID = $dp->getNewHoaDonId();
        $sql1 = "INSERT INTO hoadon
        VALUES (" . $hoaDonID . "," . $total . ",'" . (new Datetime())->format('Y-m-d') . "',
        'Đang xử lý','" . $userID . "',null,'" . $address . "')";
        $result1 = $dp->excuteQuery($sql1);
        $error = false;
        foreach ($albums as $album) {
          $sql = "INSERT INTO chitiethoadon
                  VALUES (" . $album->{"albumID"} . "," . $hoaDonID . "," . $album->{"quantity"} . ")";
          $result = $dp->excuteQuery($sql);
          if (!$result) {
            $error = true;
          }
        }
        if ($result1 && !$error) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
    }
    break;
}