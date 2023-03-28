<div class="background">
  <div class="top">
    <div class="logo-placeholder">
      <img src="views/assets/img/Logo.png" alt="logo">
    </div>
    <div class="top-menu">
      <div class="tab-title active" onclick="loadPageByAjax('statistic'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-solid fa-house "></i>
        </div>
        <div class="tab-info">statistic</div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('productManager'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-solid fa-heart"></i>
        </div>
        <div class="tab-info">Product Manager</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Favorites</div>
          <div class="tab-notice-info">Log in to see saved songs, albums, artists in Favorties</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('orderManager'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-brands fa-opencart "></i>
        </div>
        <div class="tab-info">Order Manager</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Cart</div>
          <div class="tab-notice-info">Log in to check, add, remove products in My Cart</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('accountManager'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-brands fa-opencart "></i>
        </div>
        <div class="tab-info">Account Manager</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Cart</div>
          <div class="tab-notice-info">Log in to check, add, remove products in My Cart</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('distributor'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-brands fa-opencart "></i>
        </div>
        <div class="tab-info">Distributor</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Cart</div>
          <div class="tab-notice-info">Log in to check, add, remove products in My Cart</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="loadPageByAjax('structureManager'),selectMenu(this)">
        <div class="tab-icon">
          <i class="fa-brands fa-opencart "></i>
        </div>
        <div class="tab-info">Structure Manager</div>
        <div class="tab-notice">
          <div class="tab-notice-headline">Access Your Cart</div>
          <div class="tab-notice-info">Log in to check, add, remove products in My Cart</div>
          <div class="button-placeholder">
            <input type="button" value="Not now">
            <input type="button" value="Log in" style="color:">
          </div>
        </div>
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
    <div class="footer-placeholder" onclick="loadPageByAjax('footer'),selectMenu(this)">
      <p>About us</p>
    </div>
  </div>
</div>