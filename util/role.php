<?php
session_start();
require("../util/dataProvider.php");
$dp = new DataProvider();
switch ($_SERVER["REQUEST_METHOD"]) {
    case 'POST':
        switch ($_POST["action"]) {
            case 'newRole':
                $newRole = $_POST["roleName"];
                $sql = "INSERT INTO vaitro
                        VALUES (,'" . $newRole . "')";
                $result = $dp->excuteQuery($sql);
                if ($result) {
                    echo "Success";
                } else {
                    echo "error";
                }
                break;
            case 'assignPermission':
                $roleID = $_POST['roleID'];
                $permissionID = $_POST['permissionID'];
                $sql = "INSERT INTO vaitro_quyen
                        VALUES ('" . $roleID . "','" . $permissionID . "')";
                $result = $dp->excuteQuery($sql);
                if ($result) {
                    echo "Success";
                } else {
                    echo "error";
                }
                break;
        }
        break;
    case 'DELETE':
        switch ($_GET['action']) {
            case 'removeAssignPermission':
                $roleID = $_GET['roleID'];
                $permissionID = $_GET['permissionID'];
                $sql = "DELETE FROM vaitro_quyen
                        WHERE maVaiTro=" . $roleID . "' AND maQuyen=" . $permissionID;
                $result = $dp->excuteQuery($sql);
                if ($result) {
                    echo "Success";
                } else {
                    echo "error";
                }
                break;
        }
        break;
}