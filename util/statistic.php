<?php
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        switch ($_GET['action']) {
            case 'getSalesByYear':
                $year = $_GET['year'];
                $sql = "SELECT DATE_FORMAT(thoiGianDat, '%m') AS mon, SUM(tongTien) AS total
                        FROM hoadon WHERE trangThai = 'Delivered' and DATE_FORMAT(thoiGianDat, '%Y') = $year
                        GROUP BY DATE_FORMAT(thoiGianDat, '%Y-%m')
                        ORDER BY mon ASC;";
                $result = $dp->excuteQuery($sql);
                $data = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        array_push($data, $row);
                    }
                }
                echo json_encode($data);
                break;
        }
        break;
}