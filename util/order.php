<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
  case 'GET':
    switch ($_GET['action']) {
      case 'getOrderInfo':
        $orderID = $_GET['orderID'];
        $sql = "SELECT * FROM hoadon WHERE maHoaDon = " . $orderID;
        $result = $dp->excuteQuery($sql)->fetch_assoc();
        if ($result) {
          echo json_encode($result);
        } else {
          echo "Error";
        }
        break;
        case 'getAlbumsInOrder':
          $orderID = $_GET['orderID'];
          $sql = "SELECT * FROM chitiethoadon WHERE hoaDon = " . $orderID;
          $result = $dp->excuteQuery($sql);
          $albums = array();
          if ($result) {
            while ($row = $result->fetch_assoc()) {
              $albums[] = $row;
            }
            echo json_encode($albums);
          } else {
            echo "Error";
          }
          break;
    }
    break;

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
        'Pending','" . $userID . "',null,'" . $address . "')";
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
  case 'DELETE':
    switch ($_GET['action']) {
      case 'cancelOrder':
        $orderID = $_GET['orderID'];
        $sql1 = "DELETE FROM chitiethoadon WHERE hoaDon = " . $orderID;
        $result2 = $dp->excuteQuery($sql1);
        $sql2 = "DELETE FROM hoadon WHERE maHoaDon = " . $orderID;
        $result1 = $dp->excuteQuery($sql2);
        if ($result1 && $result2) {
          echo "Success";
        } else {
          echo "Error";
        }
        break;
    }
    break;
}