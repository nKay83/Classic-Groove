<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$role = getAllRole();
?>
<div id="roleManager">
    <h1>Permission</h1>
    <div class="permission-placeholder">
        <div class="title-placeholder">
            <div class="title">No.</div>
            <div class="title">Role id</div>
            <div class="title">Role name</div>
            <div class="title">Description</div>
            <div class="title"></div>

        </div>
        <div class="list-placeholder">
            <?php for ($i = 0; $i < count($role); $i++): ?>
                <div class="role-information">
                    <div class="item">
                        <?= sprintf("%02d", $i + 1) ?>
                    </div>
                    <div class="item">
                        <?= $role[$i]['maVaiTro'] ?>
                    </div>
                    <div class="item">
                        <?= $role[$i]['tenVaiTro'] ?>
                    </div>
                    <div class="item">
                        <?= $role[$i]['moTa'] ?>
                    </div>
                    <div class="item" onclick="loadModalBoxByAjax('detailRole', <?= $role[$i]['maVaiTro'] ?>)"><i
                            class="fa-regular fa-circle-info"></i>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>

    <div id="modal-box"></div>
</div>
<?php
function getAllRole()
{
    global $dp;
    $sql = "SELECT * FROM vaitro where maVaiTro != 1";
    $result = $dp->excuteQuery($sql);
    $role = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($role, $row);
        }
    }
    return $role;
}
?>