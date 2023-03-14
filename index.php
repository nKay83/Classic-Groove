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
  <link rel="stylesheet" href="style/user/favorite.css" />
  <link rel="stylesheet" href="style/user/myAccount.css" />
  <link rel="stylesheet" href="style/user/mycart.css">
  <link rel="stylesheet" href="style/user/search.css" />
  <link rel="stylesheet" href="style/user/productDetails.css">
  <link rel="stylesheet" href="style/user/songControl.css">
  <link rel="stylesheet" href="style/user/login.css">
  <link rel="stylesheet" href="style/user/myAccount.css">
  <link rel="stylesheet" href="style/user/purchaseHistory.css">
  <link rel="stylesheet" href="style/admin/changeProduct.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700;800&display=swap" rel="stylesheet">
  <!-- font-family: "Dosis", sans-serif; -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>



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
        <?php
        // if (isset($_GET["page"])) {
        //   switch ($_GET["page"]) {
        //     case "home":
        //       include('pages/user/home.php');
        //       break;
        //     case "favorites":
        //       include("pages/user/favorites.php");
        //       break;
        //     case "myCart":
        //       include("pages/user/myCart.php");
        //       break;
        //     case "myAccount":
        //       include("pages/user/myAccount.php");
        //       break;
        //     case "productDetails":
        //       include("pages/user/productDetails.php");
        //       break;
        //     default:
        //       echo `<h1>Page not found 404</h1>`;
        //   }
        // } else {
        //   // include("pages/user/home.php");
        //   // include("pages/user/login.php");
        //   // include("pages/admin/productManager.php");
        //   include("pages/user/purchaseHistory.php");
        // }
        ?>

      </div>
      <div id="song-control">
        <?php include 'pages/user/songControl.php' ?>
      </div>
  </div>
  </main>
</body>
<script src="js/effectPages.js"></script>
<script src="js/login.js"></script>
<script src="js/songControl.js"></script>
<script src="js/loadPage.js"></script>

</html>