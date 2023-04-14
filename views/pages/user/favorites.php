<?php
session_start();
require("../../../util/dataProvider.php");
$dp = new DataProvider();
$userID = $_SESSION['userID'];
$sql = "Select * from album where maAlbum in (Select Album from yeuthich where nguoiDung ='" . $userID . "')";
$result = $dp->excuteQuery($sql);
$album = array();
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		array_push($album, $row);
	}
}
?>

<div id="favorite">
	<div class=category>
		<h2 id="h2">Albums</h2>
		<div class="grid-container">
			<?php
			foreach ($album as $al) {
				echo '
					<div class="grid-item" onclick="loadProductDetailsByAjax(' . $al["maAlbum"] . ')" >
						<div class="img-container">
						<img src="data/imgAlbum/' . $al["hinh"] . '.jpg" alt="album\'s poster">
						</div>
						<p class="title">' . $al["tenAlbum"] . '</p>
						<p class="gray artist">' . $al["tacGia"] . '</p>
						<p class="price">' . $al["gia"] . ' $</p>
					</div>';
			}
			?>
		</div>
	</div>
</div>