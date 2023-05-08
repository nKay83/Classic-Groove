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
            case 'updateRole':
                $roleID = $_POST["roleID"];
                $roleName = $_POST["roleName"];
                $roleDescription = $_POST["roleDescription"];
                $listPermission = $_POST["listPermission"];
                $sql = "UPDATE vaitro
                        SET tenVaiTro ='" . $roleName . "',
                            moTa = '" . $roleDescription . "'
                        WHERE maVaiTro = " . $roleID;
                $result1 = $dp->excuteQuery($sql);
                $sql = "DELETE FROM vaitro_quyen
                        WHERE VaiTro_maVaiTro = " . $roleID;
                $result2 = $dp->excuteQuery($sql);
                $sql = "INSERT INTO vaitro_quyen
                        VALUES ";
                foreach ($listPermission as $permission) {
                    $sql .= "(" . $roleID . "," . $permission . "),";
                }
                $sql = substr($sql, 0, -1);
                $result3 = $dp->excuteQuery($sql);
                if ($result1 && $result2 && $result3) {
                    echo "Success";
                } else {
                    echo "error";
                }
                break;
        }
        break;

}