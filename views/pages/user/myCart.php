<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
session_start();
$userID = $_SESSION['userID'];
$sql = "SELECT giohang.soLuong as ghsl, album.*, theloai.* FROM giohang join album on giohang.maAlbum = album.maAlbum
        join theloai on album.theloai = theloai.maLoai where maKhachHang = '" . $userID . "'";
$result = $dp->excuteQuery($sql);
$album = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($album, $row);
    }
}
?>
<div id="mycart">
    <div class="left-placeholder">
        <?php
        foreach ($album as $al) {
            echo '
            <div class="product-placeholder">
                <div class="product-img-placeholder">
                    <img src="data/imgAlbum/' . $al['hinh'] . '.jpg" alt="poster">
                </div>
                <div class="product-info-placeholder">
                    <div class="album-name">' . $al['tenAlbum'] . '</div>
                    <div class="album-artist">' . $al['tacGia'] . '</div>
                    <div class="product-kind">' . $al['tenLoai'] . '</div>
                    <div class="QPT">
                        <div class="QPT-info">Quantity</div>
                        <div class="QPT-info">Price</div>
                        <div class="QPT-info">Total</div>
                        <div class="QPT-info">
                            <div class="quantity-placeholder">
                                <div class="quantity-info"><i class="fa-solid fa-minus fa-xs"></i></div>
                                <input type="text" class="quantity-info" value="' . $al['ghsl'] . '">
                                <div class="quantity-info"><i class="fa-solid fa-plus-large fa-xs"></i></div>
                            </div>
                        </div>
                        <div class="QPT-info">$' . number_format((float) $al["gia"], 2, '.', '') . '</div>
                        <div class="QPT-info">$' . number_format((float) ($al['gia'] * $al['soLuong']), 2, '.', '') . '</div>
                    </div>
                </div>
                <div class="button-placeholder">
                    <div class="erase-button"><i class="fa-solid fa-xmark fa-lg"></i></div>
                    <div class="check-button">
                        <input type="checkbox">
                    </div>
                </div>
            </div>
        ';
        }
        ?>
    </div>
    <div class="right-placeholder">
        <div class="totalprice-placeholder">
            <div class="totalprice-header">
                <h1>Summary</h1>
            </div>
            <div class="totalprice-info">
                <div class="price-kind">Subtotal:</div>
                <div class="price-detail">$125.00</div>
                <div class="price-kind">Shipping:</div>
                <div class="price-detail">$0.00</div>
                <div class="price-kind">Discount:</div>
                <div class="price-detail">$0.00</div>
            </div>
            <div class="totalprice-final">
                <div class="price-kind">Total:</div>
                <div class="price-detail">$125.00</div>
            </div>
            <div class="totalprice-button">
                <button>Place order</button>
            </div>
        </div>
    </div>