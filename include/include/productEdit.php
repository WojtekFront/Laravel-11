<h3>Edycja oraz usuwanie produktu</h3><br>
Podaj ID produktu do edycji:
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <input type='number' name='productId'>
    <input type='submit' name='Wyszukaj' value='Wyszukaj'>
</form>




<?php
$productID;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productID = $_POST['productId'];
    if (isset($productID) && !is_null($productID)) {
        $sql = "SELECT*FROM product WHERE product_removed=1 AND product_id=$productID";
        if ($resultProducts = mysqli_query($conn, $sql)) {

            while ($row = mysqli_fetch_row($resultProducts)) {
                var_dump($row[4]);
                echo "
                <form class='editPosition' method='POST' action='include/dbUpdate.php'>
    <table class='mainTable'>
    <tr>
        <td>ID</td>
        <td>Tytuł</td>
        <td>Opis</td>
        <td>Status</td>
        <td>usuń/edytuj produkt</td>
    </tr>

    <tr>
            <td>{$row[0]}</td>
            <td>{$row[2]}</td>
            <td>{$row[3]}</td>
            <td>{$row[4]}</td>
            
    </tr>
    <tr>
            <td><input type='number' name='productID' value='{$row[0]}' readonly></td>
            <td><input type='text' name='productTitle' value='{$row[2]}'></td>
            <td><input type='text' name='productDescribe' value='{$row[3]}'></td> 
          
            <td>
            ";
                if (strcmp($row[4], 'dostepny') == 0) {
                    echo "
            <select name='productStatus'>
                <option value='dostepny' selected>dostępny</option>
                <option value='niedostepny'>niedosępny</option>
                </select>";
                } else {
                    echo "
            <select name='productStatus'>
                <option value='dostepny'>dostępny</option>
                <option value='niedostepny' selected>niedosępny</option>
                </select>";
                }
                echo "  
            </td>
            <td>
            <select name='productEdit'>
                <option value='1'>edytuj</option>
                <option style='color:red;' value='0'>usuń</option>
            </select></td>
    </tr>
    <tr>
    <td></td>
    <td><input type='submit' name='Zatwierdź' value='Zatwierdź'></td>
    </tr>
    </table><!-- close mainTable  -->
    </form>";
            }
        }
    }
}
?>