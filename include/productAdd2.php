<?php
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>
<h3>Dodawanie Produktu <span class="badge badge-secondary">wersja beta</span></h3>
<form>

  <div class="form-group row">
    <label for="productTitle" class="col-sm-2 col-form-label">Nazwa towaru:</label>
    <div class="col-sm-6 col-md-4">
      <input type="text" class="form-control" id="productTitle" name="productTitle" placeholder="nazwa">
    </div>
  </div>
  <div class="form-group row">
    <label for="productDescribe" class="col-sm-2 col-form-label">Opis produktu:</label>
    <div class="col-sm-6 col-md-6">
      <textarea type="text" class="form-control" id="productDescribe" name="productDescribe" placeholder="opis" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="productStatus" class="col-sm-2 col-form-label">Status produktu</label>
    <div class="col-sm-6 col-md-4">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="productStatus" name="productStatus" value="option1" checked>
        <label class="form-check-label" for="inlineRadio1">Widoczny</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="productStatus" name="productStatus" value="option2">
        <label class="form-check-label" for="inlineRadio2">Ukryty</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="productUnit" class="col-sm-2 col-form-label">Jednostka miary:</label>
    <div class="col-sm-1 col-md-1">
      <!-- <input type="text" class="form-control" id="vatProduct" name="vatProduct" placeholder=""> -->
      <select class="form-control" id="vatProduct" name="vatProduct">
        <option>sztuka</option>
        <option>kilogram</option>
        <option>gram</option>
        <option>metr</option>
        <option>litr</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="productQuantity" class="col-sm-2 col-form-label">Ilość towaru:</label>
    <div class="col-sm-6 col-md-4">
      <input type="number" class="form-control" id="productQuantity" name="productQuantity" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="productPrice" class="col-sm-2 col-form-label">Cena produktu:</label>
    <div class="col-sm-6 col-md-4">
      <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="cena">
    </div>
  </div>
  <div class="form-group row">
    <label for="vatProduct" class="col-sm-2 col-form-label">Stawka VAT:</label>
    <div class="col-sm-1 col-md-1">
      <!-- <input type="text" class="form-control" id="vatProduct" name="vatProduct" placeholder=""> -->
      <select class="form-control" id="vatProduct" name="vatProduct">
        <option>23%</option>
        <option>8%</option>
        <option>5%</option>
        <option>0%</option>
        <option>ZW</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="productCategory" class="col-sm-2 col-form-label">Kategoria produktu:</label>
    <div class="col-sm-6 col-md-4">
      <input type="text" class="form-control" id="productCategory" name="productCategory" placeholder="">
    </div>
  </div>

  <button type='submit' value="zatwierdź" name='zatwierdz' class="btn btn-dark mb-3">Zatwierdź</button>

  <!-- <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-6 col-md-4">
      <input type="text" class="form-control" id="" name="" placeholder="">
    </div>
  </div> -->






  <!-- . Jednostka productUnit
  . EAN
  . Ilość
  . Cena
  . Stawka VAT
  . kategoria productCategory







  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div> -->
</form>

<br>