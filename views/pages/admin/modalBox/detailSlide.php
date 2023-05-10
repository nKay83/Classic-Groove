<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$slideID = $_POST['id'];
$slideShow = getSlideShow($slideID);
?>
<div class="header">Slide infomation</div>
<div class="top">
    <div class="img-placeholder">
        <img class="imgSlide" src="data/imgAlbum/<?= $slideShow['linkHinh'] ?>" alt="imgSlideShow">
        <input type="button" value="change" onclick=uploadImgSlide()>
    </div>
    <div class="info-placeholder">
        <div class="info">
            <div class="item">Name</div>
            <div class="item"><input class="nameSlide" value="<?= $slideShow['tenHinh'] ?>" type="text"></div>
            <div class="item">Linked to</div>
            <div class="item"><input class="linkToSlide" value="<?= $slideShow['linkTo'] ?>" type="text"></div>
        </div>
        <div class="button">
            <div class="item" onclick="deleteSlide(<?= $slideShow['maHinh'] ?>)">
                <input type="button" value="Delete">
            </div>
            <div class="item" onclick="updateSlide(<?= $slideShow['maHinh'] ?>)">
                <input type="button" value="Save">
            </div>
        </div>
    </div>
</div>

<?php
function getSlideShow($slideID)
{
    global $dp;
    $sql = "SELECT * FROM slideshow where maHinh = $slideID";
    $result = $dp->excuteQuery($sql);
    return $result->fetch_assoc();
}
?>