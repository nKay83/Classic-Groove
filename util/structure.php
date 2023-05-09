<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        switch ($_GET["action"]) {
            case 'getDetailSlide':
                $slideID = $_GET["slideID"];
                $sql = "SELECT * FROM slideshow WHERE maHinh = " . $slideID;
                $result = $dp->excuteQuery($sql);
                echo json_encode($result->fetch_assoc());
                break;
        }
        break;
}