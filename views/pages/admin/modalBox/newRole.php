<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$newRoleID = getNewRoleID();
?>

<h1>Role new</h1>
<div class="info-role">
    <div class="role-header">Role infomation</div>
    <div class="row">
        <label for="">ID:</label>
        <Span>
            <?= $newRoleID ?>
        </Span>
    </div>
    <div class="row">
        <label for="">Name:</label>
        <input type="text" value="">
    </div>
    <div class="row">
        <label for="">Des:</label>
        <textarea name="" id="" cols="30" rows="5"></textarea>
    </div>
    <div class="button-layout">
        <div class="button-container" onclick="addNewRole(<?= $newRoleID ?>)">
            <i class="fa-solid fa-folder-arrow-down"></i>
            <span class="info-placeholder">save</span>
        </div>
        <div class="button-container" onclick="loadPageByAjax('roleManager')">
            <i class="fa-solid fa-back"></i>
            <span class="info-placeholder">Cancel</span>
        </div>
    </div>
</div>
<div class="role-placeholder">
    <div class="role-box">
        <div class="role-header">Product management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="1">
        </div>
        <div class="role-item">Delete</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="3">
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="2">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Supply management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="4">
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="5">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Account management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="6">
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="7">
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="8">
        </div>
        <div class="role-item">Block</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="9">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Order management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="10">
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="11">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Structure management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="12">
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="13">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Role management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="14">
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="15">
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="16">
        </div>
        <div class="role-item">Delete</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="17">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Statistic management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="18">
        </div>
    </div>
    <div class="role-box">
        <div class="role-header">Distributor management</div>
        <div class="role-item">Access</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="19">
        </div>
        <div class="role-item">Add</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="20">
        </div>
        <div class="role-item">Edit</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="21">
        </div>
        <div class="role-item">Delete</div>
        <div class="checkbox-placeholder">
            <input type="checkbox" value="22">
        </div>
    </div>
</div>
<?php
function getNewRoleID()
{
    global $dp;
    $sql = "SELECT MAX(maVaiTro) AS maxID FROM vaitro";
    $result = $dp->excuteQuery($sql);
    $row = mysqli_fetch_array($result);
    return $row['maxID'] + 1;
}
?>