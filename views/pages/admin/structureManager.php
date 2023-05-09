<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$slideShow = getAllSlideShow();
print_r($slideShow)
    ?>

<div id="structure">
    <h1><i class="fa-solid fa-puzzle"></i> Structure management</h1>
    <div class="manageSilder">
        <div class="header">Manage silder</div>
        <div class="top">
            <div class="img-placeholder"></div>
            <div class="info-placeholder">
                <div class="info">
                    <div class="item">Silde ID</div>
                    <div class="item"><input type="text"></div>
                    <div class="item">Linked to</div>
                    <div class="item"><input type="text"></div>
                </div>
                <div class="button">
                    <div class="item">
                        <input type="button" value="Delete">
                    </div>
                    <div class="item">
                        <input type="button" value="Save">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="title-list">
                <div class="title-placeholder">
                    <div class="title">NO.</div>
                    <div class="title">Image</div>
                    <div class="title">Name</div>
                    <div class="title">Linked to</div>
                    <div class="title"></div>
                </div>
            </div>
            <div class="list">
                <?php for ($i = 0; $i < count($slideShow); $i++): ?>
                    <div class="silde-placeholder">
                        <div class="item">
                            <?= sprintf("%02d", $i + 1) ?>
                        </div>
                        <div class="item">
                            <div class="img-placeholder">
                                <img src="data/slideShow/<?= $slideShow[$i]['linkHinh'] ?>" alt="imgSlideShow">
                            </div>
                        </div>
                        <div class="item">
                            <?= $slideShow[$i]['tenHinh'] ?>
                        </div>
                        <div class="item">
                            <?= $slideShow[$i]['linkTo'] ?>
                        </div>
                        <div class="item"><i class="fa-regular fa-circle-info"></i></div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>

<?php
function getAllSlideShow()
{
    global $dp;
    $sql = "SELECT * FROM slideshow";
    $result = $dp->excuteQuery($sql);
    $slideShow = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($slideShow, $row);
        }
    }
    return $slideShow;
}
?>