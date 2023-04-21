<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$orderID = $_POST['id'];
$order = getOrder($orderID);
?>
<div class="modal-placeholder" id="edit-order">
    <div class="modal-box">
        <div class="modal-header ">
            <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Edit order</h1>
        </div>
        <div class="modal-left">
            <div class="modal-info ">
                <div class="modal-item">
                    <div class="item-header">Order id</div>
                    <div class="item-input"><input type="text" class="orderID" value="<?= $order['maHoaDon'] ?>"
                            disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account id</div>
                    <div class="item-input"><input type="text" class="orderAccount" value="<?= $order['khachHang'] ?>"
                            disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Date of order</div>
                    <div class="item-input"><input type="text" class="orderDate"
                            value="<?= date("d/m/Y", strtotime($order['thoiGianDat'])) ?>" disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Total price</div>
                    <div class="item-input"><input type="text" class="orderPrice" value="<?= $order['tongTien'] ?>"
                            disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Discount</div>
                    <?php
                    if ($order['khuyenMai'] == 0) {
                        $km = "No discount";
                    } else {
                        $km = $order['khuyenMai'] . "%";
                    }
                    ?>
                    <div class="item-input"><input type="text" class="orderDiscount" value="<?= $km ?>" disabled></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Status</div>
                    <div class="item-input"><select name="" id="" onchange="isOrderInfoChange()" class="orderStatus">
                            <option value="<?= $order['trangThai'] ?>"><?= $order['trangThai'] ?></option>
                            <?php
                            $status = array("Pending", "Shipping", "Delivered", "Cancel");
                            foreach ($status as $s) {
                                if ($s != $order['trangThai']) {
                                    echo "<option value='$s'>$s</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-item" style=" grid-column: 1 / 3; width: 90%; margin: 0 5%;">
                    <div class="item-header">Address</div>
                    <div class="item-input"><input type="text" disabled value="<?= $order['diaChiGiaoHang'] ?>"
                            class="orderAddress"></div>
                </div>
            </div>
        </div>
        <div class="modal-right ">
            <div class="title-list ">
                <div class="title-placeholder">
                    <div class="title" style="padding-right: 10px;">No.</div>
                    <div class="title" style="padding-right: 15px;">Album ID</div>
                    <div class="title" style="padding-right: 15px;">Album name</div>
                    <div class="title" style="padding-right: 10px;">Quantity</div>
                    <div class="title" style="padding-right: 10px;">Price</div>
                </div>
            </div>
            <div class="list">
                <div class="placeholder">
                    <div class="info">
                        <div class="item">01</div>
                        <div class="item">CUS001</div>
                        <div class="item">Bùi Hồng Bảo</div>
                        <div class="item">2</div>
                        <div class="item>" style="
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            color: var(--gr1)">100</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-button">
            <div class="button-layout"></div>
            <div class="button-layout">
                <div class="edit-button btnOrderSave">
                    <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                    <div class="info-placeholder">Save</div>
                </div>
                <div class="back-button" onclick="loadModalBoxByAjax('detailOrder',<?= $orderID ?>)">
                    <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="info-placeholder">Cancel</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
function getOrder($orderID)
{
    global $dp;
    $sql = "SELECT * FROM hoadon WHERE maHoaDon = " . $orderID;
    $result = $dp->excuteQuery($sql);
    return $result->fetch_assoc();
}
?>