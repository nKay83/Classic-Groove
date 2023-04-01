<?php
require("util/dataProvider.php");
$dp = new DataProvider();
$username = "Bao";
$name="bao";
$phone ="0908141453";
$sql2 = "INSERT INTO nguoidung
 VALUES ('" . $username . "','" . $name . "','" . $phone . "', null, null, 'Hoạt động', 'KH')";
$result2 = $dp->excuteQuery($sql2);