<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';

if (isset($_SESSION["userid"])) {
    echo '<div id="addProduct">';
    include_once 'include/productAdd.php';
    echo '</div>';
    // echo "<br>";
    // echo "<br>";

    include 'include/admLog.php';
} else {
    echo "Zaloguj się, aby mieć możliwość edycji panelu.";
}

include_once 'include/incFooter.php';
?>
<script src="JS/form.js"></script>
