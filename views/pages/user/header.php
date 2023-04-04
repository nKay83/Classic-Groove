<div class="background">
  <div class="top">
    <div class="logo-placeholder">
      <img src="views/assets/img/Logo.png" alt="logo">
    </div>
    <div class="top-menu">
      <div class="tab-title active" onclick="loadHomeByAjax(),selectMenu(this,'home')">
        <div class="tab-icon">
          <i class="fa-solid fa-house "></i>
        </div>
        <div class="tab-info">Home</div>
      </div>
      <div class="tab-title" onclick="selectMenu(this,'favorites')">
        <div class="tab-icon">
          <i class="fa-solid fa-heart"></i>
        </div>
        <div class="tab-info">Favorites</div>
        <div class="tab-notice" onclick="event.stopPropagation()">
          <div class="tab-notice-headline">Access Your Favorites</div>
          <div class="tab-notice-info">Log in to see saved songs, albums, artists in Favorties</div>
          <div class="button-placeholder">
            <input type="button" value="Not now" onclick="tabNoticeNotNow(this)">
            <input type="button" value="Log in" style="color:" onclick="tabNoticeLogIn(this)">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="selectMenu(this,'myCart')">
        <div class="tab-icon">
          <i class="fa-brands fa-opencart "></i>
        </div>
        <div class="tab-info">My cart</div>
        <div class="tab-notice" onclick="event.stopPropagation()">
          <div class="tab-notice-headline">Access Your Cart</div>
          <div class="tab-notice-info">Log in to check, add, remove products in My Cart</div>
          <div class="button-placeholder">
            <input type="button" value="Not now" onclick="tabNoticeNotNow(this)">
            <input type="button" value="Log in" style="color:" onclick="tabNoticeLogIn(this)">
          </div>
        </div>
      </div>
      <div class="tab-title" onclick="selectMenu(this,'myAccount')">
        <div class="tab-icon">
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="tab-info">My account</div>
        <div class="tab-notice" onclick="event.stopPropagation()">
          <div class="tab-notice-headline">Access Your Account</div>
          <div class="tab-notice-info">Log in to see profile, purchase history in My Account </div>
          <div class="button-placeholder">
            <input type="button" value="Not now" onclick="tabNoticeNotNow(this)">
            <input type="button" value="Log in" style="color:" onclick="tabNoticeLogIn(this)">
          </div>
        </div>
        <div class="tab-menu">
          <div class="tab-icons"> <i class="fa-solid fa-user"></i></div>
          <div class="tab-icons"> <i class="fa-solid fa-list-ul"></i></div>
          <div class="tab-icons"> <i class="fa-regular fa-gear"></i></div>
          <div class="tab-icons"> <i class="fa-regular fa-circle-question"></i></div>
          <div class="tab-icons"> <i class="fa-solid fa-right-from-bracket"></i></div>

        </div>
      </div>
    </div>
  </div>
  <div class="bottom">
    <?php
    if (!isset($_SESSION['userID'])) {
      echo '
      <div class="button-placeholder">
        <div class="left-button-login">
          <input type="button" value="Log in" onclick="loadLoginByAjax(\'logIn\'); hideTabNotice()">
        </div>
        <div class="right-button-register">
          <input type="button" value="Sign up" onclick="loadLoginByAjax(\'signUp\'); hideTabNotice()">
        </div>
      </div>';
    } else {
      echo '
      <div class="info-placeholder">
        <h3>Hello ' . $_SESSION['userName'] . '</h3>
        <input type="button" value="Logout" onclick=\'logout()\' >
      </div>
      ';
    }
    ?>
    <div class="footer-placeholder" onclick="loadPageByAjax('footer'),selectMenu(this)">
      <p>About us</p>
    </div>
  </div>
</div>