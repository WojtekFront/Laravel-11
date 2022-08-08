<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>


<?php

if (isset($_SESSION["userid"])) {
    echo "<table class='mainTableList table table-hover table-dark'>
    <thead>
<tr>
    <th class='widthMainTableListId'>ID</th>
    <th class='widthMainTableListName'>Tytuł</th>
    <th class='widthMainTableListOpis'>Opis</th>
    <th class='widthMainTableListStatus'>Status</th>
</tr>
</thead>
<tbody>";
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
</tbody>
</table><!-- close mainTable  -->


<?php
include_once 'include/incFooter.php';
?>