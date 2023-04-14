<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
    case 'POST':
        switch ($_POST['action']) {
            case 'favorite':
                if (!isset($_SESSION['userID'])) {
                    echo "You are not logged in!";
                    break;
                }
                $userID = $_SESSION['userID'];
                $albumID = $_POST['albumID'];
                $sql = "INSERT INTO yeuthich
                    VALUES ( " . $albumID . " ,'" . $userID . "')";
                $result = $dp->excuteQuery($sql);
                if ($result) {
                    echo "success";
                } else {
                    echo "error";
                }
                break;
        }
        break;
    case 'DELETE':
        switch ($_GET['action']) {
            case 'dislike':
                $userID = $_SESSION['userID'];
                $albumID = $_GET['albumID'];
                $sql = "DELETE FROM yeuthich
                    WHERE nguoiDung = '" . $userID . "' AND album = " . $albumID . "";
                $result = $dp->excuteQuery($sql);
                if ($result) {
                    echo "success";
                } else {
                    echo "error";
                }
                break;
        }
        break;

}