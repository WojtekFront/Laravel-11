<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>


<?php

if (isset($_SESSION["userid"])) {
    echo "<table class='mainTable'>
<tr>
    <td>ID</td>
    <td>Tytuł</td>
    <td>Opis</td>
    <td>Status</td>

</tr>";
    $sql = "SELECT*FROM product WHERE product_removed=1";
    if ($resultProducts = mysqli_query($conn, $sql)) {

        while ($row = mysqli_fetch_row($resultProducts)) {
            echo "<tr><td>{$row[0]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        <td>{$row[4]}</td>
        </tr>";
        }
    }
} else {
    echo "Zaloguj się, aby mieć możliwość wyświetlenia listy.";
}
?>

</table><!-- close mainTable  -->


<?php
include_once 'include/incFooter.php';
?>