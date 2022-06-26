<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';

    if (isset($_SESSION["userid"])) {


        // <div id="addProduct">

        include_once 'include/productAdd.php';

        // </div>

        // <div id="removeProduct">

        include_once 'include/productEdit.php';
        // </div> 



        include 'include/admLog.php';
    } else {
        echo "Zaloguj się, aby mieć możliwość edycji panelu.";
    }

include_once 'include/incFooter.php';
?>