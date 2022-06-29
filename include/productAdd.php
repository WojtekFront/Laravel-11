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
            <td>EAN</td>
            <td>Status</td>
            <td>Ilość</td>
            <td>Jednostka</td>
            <td>Cena</td>
            <td>Stawka VAT</td>
        </tr>

        <td>
            <?php //id pobierane na podstawie ostatnio dodanego produktu 
            $sql = "SELECT MAX(product_id) FROM product;";
            if ($resultProducts = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_row($resultProducts)) {
                    echo ($row[0] + 1);
            }  }
            ?>   
        </td> 
        <td>
            <input type='text' name='productTitle'>
        </td>
        <td>
            <input type='text' name='productDescribe'>
        </td>
        <td>
            <input type='text' name='productEAN'>
        </td>
       
        <td> <select name='productStatus'>
                <option value='dostepny'>dostępny</option>
                <option value='niedostepny'>niedosępny</option>
            </select>
        </td>
        <td>
            <input type='number' name='productQuantity'>
        </td>
       
             <td> <select name='product_unit'> 
                <option value='sztuka'>sztuka</option>
                <option value='kilogram'>kilogram</option>
                <option value='gram'>gram</option>
                <option value='metr'>metr</option>
                <option value='litr'>litr</option>
            </select>
        </td>
    <td>
<input type="number" name="">
    </td>
    <td>
    <input type="number" name="product_price">
    </td>
    <td>
    <input type="text" name="product_VAT">
    </td>
    
    </tr>
        <tr>
            <td><input type='submit' value="zatwierdź" name='zatwierdz'></td>

        </tr>
    </table><!-- close mainTable  -->
</form>

<br>