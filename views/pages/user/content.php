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
    case "login":
      include("login.php");
      break;
    case "footer":
      include("footer.php");
      break;
    case "statistic":
      include("../admin/statistic.php");
      break;
    case "productManager":
      include("../admin/productManager.php");
      break;
    case "orderManager":
      include("../admin/orderManager.php");
      break;
    case "accountManager":
      include("../admin/accountManager.php");
      break;
    case "distributor":
      include("../admin/distributor.php");
      break;
    case "structureManager":
      include("../admin/structureManager.php");
      break;
      case "supplyRecord":
        include("../admin/supplyRecord.php");
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