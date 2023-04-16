<div class="background">
  <div class="top">
    <div class="logo-placeholder">
      <img src="views/assets/img/Logo.png" alt="logo">
    </div>
    <div class="top-menu">
      <div class="tab-title active" onclick="loadPageByAjax('statistic')">
        <div class="tab-icon"><i class="fa-solid fa-chart-column"></i></div>
        <div class="tab-info">Statistic</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('productManager')">
        <div class="tab-icon"><i class="fa-solid fa-album"></i></div>
        <div class="tab-info">Album</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Favorites</div>
          <div class="tab-notice-info">Log in to see saved songs, albums, artists in Favorties</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('orderManager')">
        <div class="tab-icon"><i class="fa-regular fa-list"></i></div>
        <div class="tab-info">Order</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('accountManager')">
        <div class="tab-icon"><i class="fa-solid fa-user"></i></div>
        <div class="tab-info">Account</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('supplyRecord')">
        <div class="tab-icon"><i class="fa-regular fa-box-open"></i></div>
        <div class="tab-info">Supply</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('distributor')">
        <div class="tab-icon"><i class="fa-solid fa-handshake"></i></div>
        <div class="tab-info">Producer</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('structureManager')">
        <div class="tab-icon"><i class="fa-solid fa-puzzle"></i></div>
        <div class="tab-info">Structure</div>
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
</div>