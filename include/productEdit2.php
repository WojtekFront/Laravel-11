<h3>Edycja oraz usuwanie produktu</h3><br>
<p>Podaj ID produktu do edycji:</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <!-- <input type='number' name='productId'> tutaj mają się pokazywać tylko id produktu z SQL z wartością 1  -->
    <select name="productId">
 
 <?php
 //choose product to edit
    $sql = "SELECT*FROM product WHERE product_removed=1";
    if ($resultProducts = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_row($resultProducts)) {
            echo "<option value={$row[0]}>
        {$row[0]} /
        {$row[2]} /
        {$row[3]} 
        </option>";
        }}?> 
    </select>
    <input type="submit" name="Wyszukaj" value="Wyszukaj">
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
                <option style='color:red;' value='2'>usuń</option>
            </select></td>
    </tr>
    <tr>
    <td></td>
    <td><input type='submit' name='Zatwierdź' value='Zatwierdź'></td> <!-- zmien 'Zatwierdź' -->
    </tr>
    </table><!-- close mainTable  -->
   
   
   
    </div>
  <!-- productTitle -->
  <div class='form-group row'>
    <label for='productTitle' class='col-sm-2 col-form-label'>Nazwa towaru:</label>
    <div class='col-sm-6 col-md-4'>
      <input type='text' class='form-control' id='productTitle' name='productTitle' placeholder='nazwa' value='{$row[2]}'>
    </div>
  </div>
  <!-- productDescribe -->
  <div class='form-group row'>
    <label for='productDescribe' class='col-sm-2 col-form-label'>Opis produktu:</label>
    <div class='col-sm-6 col-md-4'>
      <textarea type='text' class='form-control' id='productDescribe' name='productDescribe' rows='5' value='{$row[3]}'>{$row[3]}</textarea>
    </div>
  </div>
  <!-- productEAN -->
  <div class='form-group row'>
    <label for='productEAN' class='col-sm-2 col-form-label'>Kod produktu/EAN:</label>
    <div class='col-sm-6 col-md-4'>
      <input type='number' class='form-control' id='productEAN' name='productEAN' value='{$row[6]}'>
    </div>
  </div>
  <!-- productStatus -->
  <div class='form-group row'>
    <label for='productStatus' class='col-sm-2 col-form-label'>Status produktu:</label>
    <div class='col-sm-6 col-md-4'>
      <div class='form-check form-check-inline'>
        <input class='form-check-input' type='radio' id='productStatus' name='productStatus' value='{$row[4]}'>
        <label class='form-check-label' for='productStatus'>Widoczny</label>
      </div>
      <div class='form-check form-check-inline'>
        <input class='form-check-input' type='radio' id='productStatus' name='productStatus' value='ukryty'>
        <label class='form-check-label' for='productStatus'>Ukryty</label>
      </div>
    </div>
  </div>
  <!-- productUnit -->
  <div class='form-group row'>
    <label for='productUnit' class='col-sm-2 col-form-label'>Jednostka miary:</label>
    <div class='col-sm-1 col-md-1'>
      <select class='form-control' id='productUnit' name='productUnit'>
      <option value='{$row[10]}'>{$row[10]}</option>
        <option>sztuka</option>
        <option>kilogram</option>
        <option>gram</option>
        <option>metr</option>
        <option>litr</option>
      </select>
    </div>
  </div>
  <!-- productQuantity -->
  <div class='form-group row'>
    <label for='productQuantity' class='col-sm-2 col-form-label'>Ilość towaru:</label>
    <div class='col-sm-2 col-md-1'>
      <input type='number' class='form-control' id='productQuantity' name='productQuantity' value='{$row[7]}'>
    </div>
  </div>
  <!-- productPrice netto -->
  <div class='form-group row'>
    <label for='productPriceNet' class='col-sm-2 col-form-label'>Cena produktu netto:</label>
    <div class='col-sm-2 col-md-1'>
      <input type='number' class='form-control' id='productPriceNet' name='productPriceNet' value='{$row[8]}' step=1>
    </div>
  </div>
  <!-- vatProduct -->
  <div class='form-group row'>
    <label for='vatProduct' class='col-sm-2 col-form-label'>Stawka VAT:</label>
    <div class='col-sm-2 col-md-1'>
      <select class='form-control' id='vatProduct' name='vatProduct'>
      <option value='{$row[9]}'>{$row[9]}</option>
        <option value='23'>23</option>
        <option value='8'>8</option>
        <option value='5'>5</option>
        <option value='0'>0</option>
        <option value='ZW'>ZW</option>
      </select>
    </div>
  </div>
 <!-- productPrice Gross-->
 <div class='form-group row'>
    <label for='productPriceGross' class='col-sm-2 col-form-label'>Cena produktu brutto:</label>
    <div class='col-sm-2 col-md-1' id='test'>
      <input type='number' class='form-control' id='productPriceGross' name='productPriceGross' value='{$row[11]}' step=0.01 min=0 readonly>
    </div>
  </div>
  <!-- productCategory -->
  <div class='form-group row'>
    <label for='productCategory' class='col-sm-2 col-form-label'>Kategoria produktu:</label>
    <div class='col-sm-2 col-md-2'>
      <input type='text' class='form-control' id='productCategory' name='productCategory' value='{$row[1]}' list='categoryList'>
      <datalist id='categoryList'>
        <!-- extract category to external file  -->
        <option value='żywność'>
        <option value='odzież'>
        <option value='art.higieniczne'>
      </datalist>
    </div>
  </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    </form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ";
            }
        }
    }
}
?>