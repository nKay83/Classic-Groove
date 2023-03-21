<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel='shortcut icon' href='assets/img/LogoWeb.ico' />
  <link rel="stylesheet" href="assets/icons/all.css" />
  <link rel="stylesheet" href="style/user/header.css">
  <link rel="stylesheet" href="style/user/reset.css" />
  <link rel="stylesheet" href="style/user/home.css" />
  <link rel="stylesheet" href="style/user/footer.css" />
  <link rel="stylesheet" href="style/user/favorite.css" />
  <link rel="stylesheet" href="style/user/myAccount.css" />
  <link rel="stylesheet" href="style/user/mycart.css">
  <link rel="stylesheet" href="style/user/search.css" />
  <link rel="stylesheet" href="style/user/productDetails.css">
  <link rel="stylesheet" href="style/user/songControl.css">
  <link rel="stylesheet" href="style/user/login.css">
  <link rel="stylesheet" href="style/user/myAccount.css">
  <link rel="stylesheet" href="style/user/purchaseHistory.css">
  <link rel="stylesheet" href="style/admin/productManager.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="/assets/icons/scrollbar.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Admin page -->
  <link rel="stylesheet" href="style/admin/accountManager.css">
  <link rel="stylesheet" href="style/admin/changeProduct.css">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700;800&display=swap" rel="stylesheet">
  <!-- font-family: "Dosis", sans-serif; -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  

  <title>Classic-Groove</title>
</head>

<body>
  <div id="warrper">
    <header id="header">
      <?php include 'pages/user/header.php' ?>
    </header>
    <main>
      <div id="search">
        <?php include 'pages/user/search.php' ?>
      </div>
      <div id="content">
       

      </div>
      <div id="song-control">
        <?php include 'pages/user/songControl.php' ?>
      </div>
  </div>
  </main>
</body>
<script src="js/effectPages.js"></script>
<script src="js/songControl.js"></script>
<script src="js/loadPage.js"></script>
<script src="js/login.js"></script>

</html>