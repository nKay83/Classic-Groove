<?php
session_start();
?>
<div class="background">
  <div class="top">
    <div class="logo-placeholder">
      <img src="views/assets/img/Logo.png" alt="logo">
    </div>
    <div class="top-menu">
      <?php if (checkCanAccess(18)): ?>
        <div class="tab-title active" onclick="selectMenuAdmin(this,'statistic')">
          <div class="tab-icon"><i class="fa-solid fa-chart-column"></i></div>
          <div class="tab-info">Statistic</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(1)): ?>
        <div class="tab-title" onclick="selectMenuAdmin(this,'productManager')">
          <div class="tab-icon"><i class="fa-solid fa-album"></i></div>
          <div class="tab-info">Album</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(10)): ?>
        <div class="tab-title" onclick="selectMenuAdmin(this,'orderManager')">
          <div class="tab-icon"><i class="fa-regular fa-list"></i></div>
          <div class="tab-info">Order</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(6)): ?>
        <div class="tab-title" onclick="selectMenuAdmin(this,'accountManager')">
          <div class="tab-icon"><i class="fa-regular fa-user"></i></div>
          <div class="tab-info">Account</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(4)): ?>
        <div class="tab-title" onclick="selectMenuAdmin(this,'supplyRecord')">
          <div class="tab-icon"><i class="fa-regular fa-box-open"></i></div>
          <div class="tab-info">Supply</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(12)): ?>
        <div class="tab-title" onclick="selectMenuAdmin(this,'structureManager')">
          <div class="tab-icon"><i class="fa-solid fa-puzzle"></i></div>
          <div class="tab-info">Structure</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(14)): ?>
        <div class="tab-title" onclick="selectMenuAdmin(this,'roleManager')">
          <div class="tab-icon"><i class="fa-regular fa-user-pen"></i></div>
          <div class="tab-info">Permission</div>
        </div>
      <?php endif ?>
    </div>
  </div>
  <div class="bottom">
    <div class="info-placeholder" onclick="logout()">
      <h3>Hello
        <?= $_SESSION['userName'] ?>
      </h3>
      <div class="log-out-button">
        <i class="fa-solid fa-right-from-bracket"></i>
      </div>
    </div>
  </div>
</div>
<?php
function checkCanAccess($permission)
{
  if (in_array($permission, $_SESSION['permission']))
    return true;
  return false;
}
?>