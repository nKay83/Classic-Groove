<?php
require("util/dataProvider.php");
$dp = new DataProvider();

$sql = "SELECT * FROM theloai ";
$result = $dp->excuteQuery($sql);
$category = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($category, $row);
  }
}
?>
<div class="search-container">
  <div class="search">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="text" id="search-btn" placeholder="What do you want to listen or buy?">
  </div>
</div>
<div class="drop-menu-container">

  <div class="drop-menu">
    <i class="fa-sharp fa-regular fa-bars-filter"></i>
    <select name="" id="drop-menu-btn" onchange="filter()">
      <option value="0">All</option>
      <?php
      foreach ($category as $cat) {
        echo "<option value='" . $cat['maLoai'] . "'>" . $cat['tenLoai'] . "</option>";
      }
      ?>
    </select>
  </div>
</div>
<div class="price-container">
  <div class="price">
    <i class="fa-regular fa-coin"></i>
    <input type="range" min="0" max="500" value="0" name="" id="price-ptn">
    <i class="fa-regular fa-coins"></i>
  </div>
</div>