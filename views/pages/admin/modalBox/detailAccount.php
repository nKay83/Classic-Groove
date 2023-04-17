<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$account = getAllAccount();
print_r($account);
?>
<div class="modal-placeholder" id="detail-account">
    <div class="modal-box">
        <div class="modal-header">
            <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Account details</h1>
        </div>
        <div class="modal-info">
            <div class="modal-item">
                <div class="item-header">Account id</div>
                <div class="item-input"><input type="text" value="CUS001"></div>
            </div>
            <div class="modal-item">
                <div class="item-header">Account name</div>
                <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
            </div>
            <div class="modal-item">
                <div class="item-header">Email</div>
                <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
            </div>
            <div class="modal-item">
                <div class="item-header">Phone number</div>
                <div class="item-input"><input type="text" value="0900000000"></div>
            </div>
            <div class="modal-item">
                <div class="item-header">Address</div>
                <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
            </div>
            <div class="modal-item">
                <div class="item-header">Role</div>
                <div class="item-input"><select name="" id="">
                        <option value="CUS">Customer</option>
                        <option value="EM">Employee</option>
                        <option value="AD">Admin</option>
                    </select>
                </div>
            </div>
            <div class="modal-item">
                <div class="item-header">Account name</div>
                <div class="item-input"><input type="text" value="baohongbui313"></div>
            </div>
            <div class="modal-item">
                <div class="item-header">Password</div>
                <div class="item-input"><input type="text" value="baobaobuibui"></div>
            </div>
        </div>
        <div class="modal-button">
            <div class="button-layout"></div>
            <div class="button-layout">
                <div class="edit-button" onclick="loadModalBoxByAjax('editAccount')">
                    <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                    <div class="info-placeholder">Edit</div>
                </div>
                <div class="back-button" onclick="closeDetailAccount()">
                    <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="info-placeholder">Back</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
function getAllAccount()
{
    global $dp;
    $sql = "SELECT * FROM taikhoan
            join nguoidung on taikhoan.username = nguoidung.maNguoiDung
            join vaitro on taikhoan.vaiTro = vaitro.maVaiTro";
    $result = $dp->excuteQuery($sql);
    $account = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($account, $row);
        }
    }
    return $account;
}
?>