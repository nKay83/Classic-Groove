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
    case 'PUT':
        switch ($_GET["action"]) {
            case 'updateSlide':
                $slideID = $_GET["slideID"];
                $slideName = $_GET["slideName"];
                $slideImg = $_GET["slideImg"];
                $slideTo = $_GET["slideLinkTo"];
                $sql = "UPDATE slideshow SET tenHinh = '$slideName', linkHinh = '$slideImg', linkTo = $slideTo WHERE maHinh = $slideID";
                $result = $dp->excuteQuery($sql);
                if ($result) {
                    echo 'Success';
                } else {
                    echo 'error';
                }

                break;
        }
        break;
}