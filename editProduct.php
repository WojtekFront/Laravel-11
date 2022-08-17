<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';

    if (isset($_SESSION["userid"])) {
      //  include_once 'include/productEdit.php';
echo "<br><br>";
include_once 'include/productEdit2.php';

        include 'include/admLog.php';
    } else {
        echo "Zaloguj się, aby mieć możliwość edycji panelu.";
    }
include_once 'include/incFooter.php';
?>
<script src="JS/form.js"></script>