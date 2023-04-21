<p>Từ từ có làm gì căng?</p>
<p>Current Permission:</p>
<?php
session_start();
foreach ($_SESSION['permission'] as $permission) {
    echo $permission . "<br>";
}
?>