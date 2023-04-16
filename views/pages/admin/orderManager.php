<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$order = getAllOrder();
print_r($order[0])
    ?>
<div id="orderManager">
    <h1><i class="fa-regular fa-list"></i> Order management</h1>
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
                        <?= $i + 1 ?>
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
                    <div class="item" onclick="openDetailorder(<?= $order[$i]['maHoaDon'] ?>)"><i
                            class="fa-regular fa-circle-info"></i></div>
                </div>
            </div>
        <?php endfor ?>
    </div>
    <div class="modal-placeholder" id="detail-order">
        <div class="modal-box">
            <div class="modal-header">
                <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Order details</h1>
            </div>
            <div class="modal-left">
                <div class="modal-info">
                    <div class="modal-item">
                        <div class="item-header">Order id</div>
                        <div class="item-input"><input type="text" ></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Account id</div>
                        <div class="item-input"><input type="text" ></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Date of order</div>
                        <div class="item-input"><input type="text" ></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Total price</div>
                        <div class="item-input"><input type="text" ></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Discount</div>
                        <div class="item-input"><input type="text"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Status</div>
                        <div class="item-input"><select name="" id="">
                                <option value="P">Pending</option>
                                <option value="S">Shipping</option>
                                <option value="A">Approve</option>
                                <option value="C">Cancel</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-item" style=" grid-column: 1 / 3; width: 90%; margin: 0 5%;">
                        <div class="item-header">Address</div>
                        <div class="item-input"><input type="text" class="orderAddress"></div>
                    </div>
                </div>
            </div>
            <div class="modal-right">
                <div class="title-list">
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
                    <div class="edit-button" onclick="openEditorder()">
                        <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="info-placeholder">Edit</div>
                    </div>
                    <div class="back-button" onclick="closeDetailorder()">
                        <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="info-placeholder">Back</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-placeholder" id="edit-order">
        <div class="modal-box">
            <div class="modal-header ">
                <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Edit order</h1>
            </div>
            <div class="modal-left">
                <div class="modal-info ">
                    <div class="modal-item">
                        <div class="item-header">Order id</div>
                        <div class="item-input"><input type="text"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Account id</div>
                        <div class="item-input"><input type="text"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Date of order</div>
                        <div class="item-input"><input type="text"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Total price</div>
                        <div class="item-input"><input type="text"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Discount</div>
                        <div class="item-input"><input type="text"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Status</div>
                        <div class="item-input"><select name="" id="">
                                <option value="P">Pending</option>
                                <option value="S">Shipping</option>
                                <option value="A">Approve</option>
                                <option value="C">Cancel</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-item" style=" grid-column: 1 / 3; width: 90%; margin: 0 5%;">
                        <div class="item-header">Address</div>
                        <div class="item-input"><input type="text" class="orderAddress"></div>
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
                    <div class="edit-button">
                        <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="info-placeholder">Save</div>
                    </div>
                    <div class="back-button" onclick="closeEditorder()">
                        <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="info-placeholder">Cancel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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