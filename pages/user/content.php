<?php
if (isset($_POST["page"])) {
  switch ($_POST["page"]) {
    case "home":
      echo file_get_contents('home.php');
      break;
    case "favorites":
      echo file_get_contents('favorites.php');
      break;
    case "myCart":
      echo file_get_contents('myCart.php');

      break;
    case "myAccount":
      echo file_get_contents('myAccount.php');
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