<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        switch ($_GET['action']) {
            case 'getQuantity':
                $albumID = $_GET['albumID'];
                $sql = "SELECT soLuong FROM album WHERE maAlbum = " . $albumID;
                $result = $dp->excuteQuery($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row['soLuong'];
                } else {
                    echo "error";
                }
                break;
            case 'getInfoAlbum':
                $albumID = $_GET['albumID'];
                $sql = "SELECT * FROM album
                        join theloai on album.theLoai = theloai.maLoai
                        Where maAlbum = " . $albumID;
                $result = $dp->excuteQuery($sql)->fetch_assoc();
                if ($result != null) {
                    echo json_encode($result);
                } else {
                    echo "error";
                }
                break;
            case 'getAllSongs':
                $sql = "SELECT * FROM baihat";
                $result = $dp->excuteQuery($sql);
                $songs = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        array_push($songs, $row);
                    }
                    echo json_encode($songs);
                }
                break;
            case 'getNewIDSong':
                $sql = "SELECT maBaiHat FROM baihat ORDER BY maBaiHat DESC LIMIT 1";
                $result = $dp->excuteQuery($sql)->fetch_assoc();
                if ($result != null) {
                    echo $result['maBaiHat'] + 1;
                } else {
                    echo "error";
                }
                break;
            case 'getSongByAlbum':
                $albumID = $_GET['albumID'];
                $sql = "SELECT * FROM baihat_album
                        JOIN baihat on baihat_album.BaiHat_maBaiHat = baihat.maBaiHat
                        WHERE baihat_album.Album_maAlbum = " . $albumID;
                $result = $dp->excuteQuery($sql);
                $songs = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        array_push($songs, $row);
                    }
                }
                echo json_encode($songs);
                break;
        }
        break;
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
            case 'deleteSongInAlbum':
                $albumID = $_GET['albumID'];
                $songID = $_GET['songID'];
                $sql = "DELETE FROM baihat_album
                        WHERE BaiHat_maBaiHat = " . $songID . " AND Album_maAlbum = " . $albumID;
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