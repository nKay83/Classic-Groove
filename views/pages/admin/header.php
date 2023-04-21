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
        <div class="tab-title active" onclick="loadPageByAjax('statistic')">
          <div class="tab-icon"><i class="fa-solid fa-chart-column"></i></div>
          <div class="tab-info">Statistic</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(1)): ?>
        <div class="tab-title" onclick="loadPageByAjax('productManager')">
          <div class="tab-icon"><i class="fa-solid fa-album"></i></div>
          <div class="tab-info">Album</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(10)): ?>
        <div class="tab-title" onclick="loadPageByAjax('orderManager')">
          <div class="tab-icon"><i class="fa-regular fa-list"></i></div>
          <div class="tab-info">Order</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(6)): ?>
        <div class="tab-title" onclick="loadPageByAjax('accountManager')">
          <div class="tab-icon"><i class="fa-solid fa-user"></i></div>
          <div class="tab-info">Account</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(4)): ?>
        <div class="tab-title" onclick="loadPageByAjax('supplyRecord')">
          <div class="tab-icon"><i class="fa-regular fa-box-open"></i></div>
          <div class="tab-info">Supply</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(19)): ?>
        <div class="tab-title" onclick="loadPageByAjax('distributor')">
          <div class="tab-icon"><i class="fa-solid fa-handshake"></i></div>
          <div class="tab-info">Distributor</div>
        </div>
      <?php endif ?>
      <?php if (checkCanAccess(12)): ?>
        <div class="tab-title" onclick="loadPageByAjax('structureManager')">
          <div class="tab-icon"><i class="fa-solid fa-puzzle"></i></div>
          <div class="tab-info">Structure</div>
        </div>
      <?php endif ?>
      <div class="tab-title" onclick="loadPageByAjax('roleManager')">
        <div class="tab-icon"><i class="fa-regular fa-user-pen"></i></div>
        <div class="tab-info">Permission</div>
      </div>
    </div>
  </div>
</div>
<div class="bottom">
  <div class="button-placeholder">
    <div class="left-button-login">
      <input type="button" value="Log in" onclick="loadLoginByAjax('logIn')">
    </div>
    <div class="right-button-register">
      <input type="button" value="Sign up" onclick="loadLoginByAjax('signUp')">
    </div>
  </div>
  <div class="footer-placeholder" onclick="loadPageByAjax('footer')">
    <p>About us</p>
  </div>
</div>

<?php
function checkCanAccess($permission)
{
  if (isset($_SESSION['permission'])) {
    foreach ($_SESSION['permission'] as $p) {
      if ($p == $permission) {
        return true;
      }
    }
  }
  return false;
}

?>