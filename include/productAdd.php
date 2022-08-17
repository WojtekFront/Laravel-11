<?php
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>
<h3>Dodawanie Produktu <span class='badge badge-secondary'>wersja beta</span></h3>

<form class='editPosition' method='POST' action='include/dbInsert.php'>
  <!-- productID -->
  <div class='form-group row'>
    <label for='productTitle' class='col-sm-2 col-form-label'>ID towaru:</label>
    <div class='col-sm-1 col-md-1'>
      <input class='form-control' readonly value='  <?php //id pobierane na podstawie ostatnio dodanego produktu 
                                                    $sql = 'SELECT MAX(product_id) FROM product;';
                                                    if ($resultProducts = mysqli_query($conn, $sql)) {

                                                      while ($row = mysqli_fetch_row($resultProducts)) {
                                                        echo ($row[0] + 1);
                                                      }
                                                    } ?>'>
    </div>
  </div>
  <!-- productTitle -->
  <div class='form-group row'>
    <label for='productTitle' class='col-sm-2 col-form-label'>Nazwa towaru:</label>
    <div class='col-sm-6 col-md-4'>
      <input type='text' class='form-control' id='productTitle' name='productTitle' placeholder='nazwa'>
    </div>
  </div>
  <!-- productDescribe -->
  <div class='form-group row'>
    <label for='productDescribe' class='col-sm-2 col-form-label'>Opis produktu:</label>
    <div class='col-sm-6 col-md-4'>
      <textarea type='text' class='form-control' id='productDescribe' name='productDescribe' placeholder='opis' rows='5'></textarea>
    </div>
  </div>
  <!-- productEAN -->
  <div class='form-group row'>
    <label for='productEAN' class='col-sm-2 col-form-label'>Kod produktu/EAN:</label>
    <div class='col-sm-6 col-md-4'>
      <input type='number' class='form-control' id='productEAN' name='productEAN' placeholder='kod'>
    </div>
  </div>
  <!-- productStatus -->
  <div class='form-group row'>
    <label for='productStatus' class='col-sm-2 col-form-label'>Status produktu:</label>
    <div class='col-sm-6 col-md-4'>
      <div class='form-check form-check-inline'>
        <input class='form-check-input' type='radio' id='productStatus' name='productStatus' value='widoczny' checked>
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
      <input type='number' class='form-control' id='productQuantity' name='productQuantity' placeholder='0'>
    </div>
  </div>
  <!-- productPrice netto -->
  <div class='form-group row'>
    <label for='productPriceNet' class='col-sm-2 col-form-label'>Cena produktu netto:</label>
    <div class='col-sm-2 col-md-1'>
      <input type='number' class='form-control' id='productPriceNet' name='productPriceNet' placeholder='cena' step=1>
    </div>
  </div>
  <!-- vatProduct -->
  <div class='form-group row'>
    <label for='vatProduct' class='col-sm-2 col-form-label'>Stawka VAT:</label>
    <div class='col-sm-2 col-md-1'>
      <select class='form-control' id='vatProduct' name='vatProduct'>
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
      <input type='number' class='form-control' id='productPriceGross' name='productPriceGross' placeholder='cena' step=0.01 min=0 readonly>
    </div>
  </div>
  <!-- productCategory -->
  <div class='form-group row'>
    <label for='productCategory' class='col-sm-2 col-form-label'>Kategoria produktu:</label>
    <div class='col-sm-2 col-md-2'>
      <input type='text' class='form-control' id='productCategory' name='productCategory' placeholder='wpisz lub wybierz' list='categoryList'>
      <datalist id='categoryList'>
        <!-- extract category to external file  -->
        <option value='żywność'>
        <option value='odzież'>
        <option value='art.higieniczne'>
      </datalist>
    </div>
  </div>

  <button type='submit' value='zatwierdz' name='zatwierdz' class='btn btn-dark mb-3'>Zatwierdź</button>

</form>

<br>



