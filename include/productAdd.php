<?php
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>
<h3>Dodawanie Produktu</h3>
<form class="editPosition" method="POST" action="include/dbInsert.php">
    <table class="mainTable">
        <tr>
            <td>ID</td>
            <td>Tytuł</td>
            <td>Opis</td>
            <td>Status</td>
        </tr>

        <td>
            <?php
            $sql = "SELECT MAX(product_id) FROM product;";
            if ($resultProducts = mysqli_query($conn, $sql)) {

                while ($row = mysqli_fetch_row($resultProducts)) {
                    echo ($row[0] + 1);
                }
            }
            ?>
        </td> <!-- id pobierane na podstawie ostatnio dodanego produktu -->
        <td>
            <input type='text' name='productTitle'>
        </td>
        <td>
            <input type='text' name='productDescribe'>
        </td>
        <td> <select name='productStatus'>
                <option value='dostepny'>dostępny</option>
                <option value='niedostepny'>niedosępny</option>
            </select>
        </td>
        <tr>
            <td></td>
            <td><input type='submit' value="zatwierdź" name='zatwierdz'></td>

        </tr>
    </table><!-- close mainTable  -->
</form>

<br>