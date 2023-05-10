<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$order = getAllOrder();
?>
<div id="orderManager">
    <div class="header">
        <h2><i class="fa-regular fa-list"></i> Order management</h2>
        <div></div>
        <div class="search-bar">
            <div class="search-input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Looking for somethings?">
            </div>
            <div class="filter-input">
                <i class="fa-regular fa-filter"></i>
                <select name="" id="">
                    <option value="default">All</option>
                    <option value="cancel">Cancel</option>
                    <option value="pending">Pending</option>
                    <option value="shipping">Shipping</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>
            <div class="date-begin">
                <input type="date" name="" id="" value="Begin date">
            </div>
            <div class="date-end">
                <input type="date" name="" id="" value="End date">
            </div>
        </div>
    </div>
    <div class="title-list">
        <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title" style="padding-right: 15px;">Order ID</div>
            <div class="title" style="padding-right: 15px;">Account ID</div>
            <div class="title" style="padding-right: 10px;">Date of order</div>
            <div class="title">Total price</div>
            <div class="title">Discount</div>
            <div class="title">Status</div>
            <div class="title"></div>
        </div>
    </div>
    <div class="list">
        <?php for ($i = 0; $i < count($order); $i++): ?>
            <div class="placeholder">
                <div class="info">
                    <div class="item">
                        <?= sprintf("%02d", $i + 1) ?>
                    </div>
                    <div class="item">
                        <?= $order[$i]['maHoaDon'] ?>
                    </div>
                    <div class="item">
                        <?= $order[$i]['khachHang'] ?>
                    </div>
                    <div class="item">
                        <?= date("d/m/Y", strtotime($order[$i]['thoiGianDat'])) ?>
                    </div>
                    <div class="item">
                        <?= "$" . $order[$i]['tongTien'] ?>
                    </div>
                    <div class="item">
                        <?php if ($order[$i]['khuyenMai'] == 0): ?>
                            <div class="item" style="color: var(--gr1)">No discount</div>
                        <?php else: ?>
                            <?= $order[$i]['khuyenMai'] . "%" ?>
                        <?php endif ?>
                    </div>
                    <div class="item">
                        <?= $order[$i]['trangThai'] ?>
                    </div>
                    <div class="item" onclick="loadModalBoxByAjax('detailOrder',<?= $order[$i]['maHoaDon'] ?>)"><i
                            class="fa-regular fa-circle-info"></i></div>
                </div>
            </div>
        <?php endfor ?>
    </div>
    <div id="modal-box"></div>
</div>
<?php
function getAllOrder()
{
    global $dp;
    $sql = "SELECT * FROM hoadon";
    $result = $dp->excuteQuery($sql);
    $order = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($order, $row);
        }
    }
    return $order;
}
?>