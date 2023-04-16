<?php
if (isset($_POST["modalBox"])) {
    switch ($_POST["modalBox"]) {
        case 'detailAlbum':
            include("modalBox/detailAlbum.php");
            break;
        default:
            echo `<h1>Page not found 404</h1>`;
    }
} else {
    echo `<h1>Page not found 404</h1>`;
}
?>