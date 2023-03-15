<?php
if (isset($_POST["page"])) {
  switch ($_POST["page"]) {
    case "home":
      include("home.php");
      break;
    case "favorites":
      include("favorites.php");
      break;
    case "myCart":
      include("myCart.php");
      break;
    case "myAccount":
      include("myAccount.php");
      break;
    default:
      echo `<h1>Page not found 404</h1>`;
  }
} else {
  // include("pages/user/home.php");
  // include("pages/user/login.php");
  // include("pages/admin/productManager.php");
  // include("pages/user/purchaseHistory.php");
}
?>