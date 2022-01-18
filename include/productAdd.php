<form class="editPosition">
    <table class="mainTable">
        <tr>
            <td>ID</td>
            <td>Tytuł</td>
            <td>Opis</td>
            <td>Status</td>
        </tr>

        <td>ID</td> <!-- id pobierane na podstawie ostatnio dodanego produktu -->
        <td>
            <input type='text' name='productTitle'>
        </td>
        <td>
            <input type='text' name='productDescribe'>
        </td>
        <td> <select name='productStatus'>
                <option value='productInWarehouse'>produkt dostępny</option>
                <option value='productOutWarehouse'>produkt niedosępny</option>
            </select>
        </td>
        <tr>
<td></td>
<td><input type='submit'></td>

        </tr>








    </table><!-- close mainTable  -->
</form>

<!-- 
<td>Tytuł</td>
<td>Opis</td>
<td>Status</td> 
-->