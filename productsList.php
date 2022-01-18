<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>

<table class="mainTable">
    <tr>
        <td>ID</td>
        <td>Tytuł</td>
        <td>Opis</td>
        <td>Status</td>

    </tr>
    <?php
    $sql = "SELECT*FROM product";
    if ($resultProducts = mysqli_query($conn, $sql)) {

        while ($row = mysqli_fetch_row($resultProducts)) {
            echo "<tr><td>{$row[0]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        <td>{$row[4]}</td>
        </tr>";
        }
    }
    ?>

</table><!-- close mainTable  -->


<?php
include_once 'include/incFooter.php';
?>