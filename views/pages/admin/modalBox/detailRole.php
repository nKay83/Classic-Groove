<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$roleID = $_POST['id'];
$role = getRole($roleID);
$listPermission = getListPermission($roleID);
print_r($listPermission);
?>

<h1>Role descriptions</h1>
<div class="info-role">
    <div class="role-header">Role infomation</div>
    <div class="row">
        <label for="">ID:</label>
        <Span>
            <?= $role['maVaiTro'] ?>
        </Span>
    </div>
    <div class="row">
        <label for="">Name:</label>
        <input type="text" value=" <?= $role['tenVaiTro'] ?>">
    </div>
    <div class="row">
        <label for="">Des:</label>
        <textarea name="" id="" cols="30" rows="5"> <?= $role['moTa'] ?></textarea>
    </div>
</div>
<div class="role-placeholder">
    <div class="role-box">
        <div class="role-header">Product management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(1)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Delete</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(3)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(2)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Supply management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(4)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(5)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Account management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(6)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(7)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(8)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Block</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(9)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Order management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(10)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(11)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Structure management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(12)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(13)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Role management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(14)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(15)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(16)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Delete</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(17)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Statistic management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(18)): ?>checked<?php endif ?>>
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Distributor management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(19)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(20)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(21)): ?>checked<?php endif ?>>
        </div>
        <div class="role-item">Delete</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" <?php if (checkExist(22)): ?>checked<?php endif ?>>
        </div>
    </div>
</div>
<?php
function getRole($roleID)
{
    global $dp;
    $sql = "SELECT * FROM vaitro where maVaiTro = " . $roleID;
    $result = $dp->excuteQuery($sql);
    return $result->fetch_assoc();
}
function getListPermission($roleID)
{
    global $dp;
    $sql = "SELECT * FROM vaitro_quyen where VaiTro_maVaiTro = " . $roleID;
    $result = $dp->excuteQuery($sql);
    $listPermission = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($listPermission, $row['Quyen_maCTQ']);
        }
    }
    return $listPermission;
}
function checkExist($perID)
{
    global $listPermission;
    foreach ($listPermission as $per) {
        if ($per == $perID) {
            return true;
        }
    }
    return false;
}
?>