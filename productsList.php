<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>

<?php
if (isset($_SESSION["userid"])) {
    echo "
    <table class='mainTableList table table-hover table-dark'>
    <thead>
<tr>
<!-- // with columun have information
    0 ID product
    1 product category
    2 product name
    3 product describe
    4 status
    5 product removed
    6 EAN
    7 quantity
    8 priceNet
    9 productVat
    10 productUnit
    11 product price gross
 -->

    <th scope='col'>ID</th>
    <th scope='col'>Tytuł</th>
    <th scope='col'>J.M.</th>
    <th scope='col'>ILOŚĆ</th>
    <th scope='col'>CENA NETTO</th>
    <th scope='col'>STAWKA VAT</th>
    <th scope='col'>CENA BRUTTO</th>
    <th scope='col'>EAN</th>
    <th scope='col'>KATEGORIA</th>
</tr>
</thead>
<tbody>";
    $sql = "SELECT*FROM product WHERE product_removed=1";
    if ($resultProducts = mysqli_query($conn, $sql)) {

        while ($row = mysqli_fetch_row($resultProducts)) {
            echo "<tr>
        <th  scope='col'>{$row[0]}</td> <!-- ID product -->
        <td>{$row[2]}</td> <!-- product name -->
        <td>{$row[10]}</td> <!-- productUnit  -->
        <td>{$row[7]}</td> <!-- quantity  -->
        <td>{$row[8]}</td> <!-- priceNet -->
        <td>{$row[9]}</td> <!-- productVat -->
        <td>{$row[11]}</td> <!-- product price gross  -->
        <td>{$row[6]}</td> <!-- EAN --> 
        <td style='display: none'>{$row[3]}</td> <!-- product describe -->
        <td style='display: none'>{$row[4]}</td> <!-- status  -->
        <td style='display: none'>{$row[5]}</td>  <!-- product removed -->
        <td>{$row[1]}</td> <!-- product category -->
        </tr>";
        }
        echo "
        <caption> Lista towarów</caption>
        </tbody>
        </table><!-- close mainTable  -->";
    }
} else {
    echo "Zaloguj się, aby mieć możliwość wyświetlenia listy.";
}
?>


<?php
include_once 'include/incFooter.php';
?>