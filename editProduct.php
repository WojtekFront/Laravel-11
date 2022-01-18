<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>

<div id="addProduct">
    <?php
    include_once 'include/productAdd.php'
    ?>
</div>


<div id="editProduct">
    <?php
    include_once 'include/productEdit.php'
    ?>
</div>


<div id="removeProduct">
    <?php
    include_once 'include/productRemove.php'
    ?>
</div>




<?php
include_once 'include/incFooter.php';
?>