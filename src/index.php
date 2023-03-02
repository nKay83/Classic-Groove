<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/icons/all.css" />
  <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/reset.css" />
  <link rel="stylesheet" href="style/home.css" />
  <link rel="stylesheet" href="style/favorite.css" />
  <link rel="stylesheet" href="style/search.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700;800&display=swap" rel="stylesheet">
  <title>Classic-Groove</title>
</head>

<body>
  <div id="warrper">
    <header>
    <?php include 'compoment/header.php' ?>
    <div class="background">
        <div class="logo-placeholder">
            <img src="../assets/img/Logo.png" alt="" >
        </div>
        <div class="top-menu">
            <div class="tab-title active">
                <div class="tab-icon">
                    <i class="fa-solid fa-house "></i>
                </div>
                <div class="tab-info">
                    Home
                </div>
            </div>
            <div class="tab-title">
                <div class="tab-icon">
                    <i class="fa-regular fa-heart "></i>
                </div>
                <div class="tab-info">
                    Favorite
                </div>
            </div>
            <div class="tab-title">
                <div class="tab-icon">
                    <i class="fa-brands fa-opencart "></i>
                </div>
                <div class="tab-info">
                    My cart
                </div>
            </div>
            <div class="tab-title">
                <div class="tab-icon">
                    <i class="fa-solid fa-user "></i>
                </div>
                <div class="tab-info">
                    My account
                </div>
            </div>
        </div>
        <div class="button-placeholder">
            <div class="left-button-login">
                <input type="button" value="Log in">
            </div>
            <div class="right-button-register">
                <input type="button" value="Sign up">
            </div>
        </div>
        <div class="footer-placeholder">
            <p>About us</p> 
        </div>
    </div>
    </header>
    <main>
      <div id="search">
        <?php include 'compoment/search.php' ?>
      </div>
      <div id="content">
        <?php include 'compoment/home.php' ?>
        <!-- <?php include 'compoment/favorites.php' ?> -->
        <!-- <?php include 'compoment/myCart.php' ?> -->
        <!-- <?php include 'compoment/myAccount.php' ?> -->
        <!-- <?php include 'compoment/productDetails.php' ?> -->
    
      </div>
      <div id="songControl">
        <!-- <?php include 'compoment/songControl.php' ?> -->
      </div>
  </div>
  </main>
</body>

</html>