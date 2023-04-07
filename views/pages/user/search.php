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
    <input type="text" id="search-btn" placeholder="What do you want to listen or buy?" onchange="loadHomeByAjax(1)">
  </div>
</div>
<div class="drop-menu-container">

  <div class="drop-menu">
    <i class="fa-sharp fa-regular fa-bars-filter"></i>
    <select name="" id="drop-menu-btn" onchange="loadHomeByAjax(1)">
      <option value="0">All</option>
      <?php
      foreach ($category as $cat) {
        echo "<option value='" . $cat['maLoai'] . "'>" . $cat['tenLoai'] . "</option>";
      }
      ?>
    </select>
  </div>
</div>
<div class="price-container tooltip">
  <div class="price">
    <i class="fa-regular fa-coin"></i>
    <input type="range" min="0" max="5" value="0" name="" id="price-ptn" step="1"
    list="markers" onchange="changeToolTip(this);loadHomeByAjax(1)">
    <i class="fa-regular fa-coins"></i>
    <span class="tooltiptext">All</span>
  </div>
  <datalist id="markers">
    <option value="0"></option>
    <option value="1"></option>
    <option value="2"></option>
    <option value="3"></option>
    <option value="4"></option>
    <option value="5"></option>
  </datalist>
</div>