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
  <link rel="stylesheet" href="style/myAccount.css" />
  <link rel="stylesheet" href="style/mycart.css">
  <link rel="stylesheet" href="style/search.css" />
  <link rel="stylesheet" href="style/productDetails.css">
  <link rel="stylesheet" href="style/songControl.css">
  <link rel="stylesheet" href="style/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700;800&display=swap" rel="stylesheet">
  <!-- font-family: "Dosis", sans-serif; -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>



  </script>
  <title>Classic-Groove</title>
</head>

<body>
  <div id="warrper">
    <header id="header">
      <?php include 'compoment/header.php' ?>
    </header>
    <main>
      <div id="search">
        <?php include 'compoment/search.php' ?>
      </div>
      <div id="content">
        <?php
        if (isset($_GET["page"])) {
          switch ($_GET["page"]) {
            case "home":
              include('compoment/home.php');
              break;
            case "favorites":
              include("compoment/favorites.php");
              break;
            case "myCart":
              include("compoment/myCart.php");
              break;
            case "myAccount":
              include("compoment/myAccount.php");
              break;
            case "productDetails":
              include("compoment/productDetails.php");
              break;
            default:
              echo `<h1>Page not found 404</h1>`;
          }
        } else {
          // include("compoment/home.php");
          include("compoment/login.php");
        }
        ?>

      </div>
      <div id="song-control">
        <?php include 'compoment/songControl.php' ?>
      </div>
  </div>
  </main>
</body>
<script src="js/effectPages.js"></script>
<script src="js/login.js" ></script>

</html>