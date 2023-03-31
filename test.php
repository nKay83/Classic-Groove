<?php
require("util/dataProvider.php");
$dp = new DataProvider();
echo $dp->getNewUserId()->fetch_assoc()['MAX(maNguoiDung)'] + 1;