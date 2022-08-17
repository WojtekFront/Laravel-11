<?php
include 'dbConn.php';
include 'dbValidation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['productTitle']); //is ok
    $describe = trim($_POST['productDescribe']); //is ok
    $EANproduct=trim($_POST['productEAN']); //add to form - validation
    $status = trim($_POST['productStatus']); // is ok
    $categoryProduct = trim($_POST['productCategory']); //add to form - validation
    $unitProduct = trim($_POST['productUnit']); //add to form - validation
    $productPriceNet = trim($_POST['productPriceNet']); //add to form - validation
    $productVat = trim($_POST['vatProduct']); //is ok
    $quantityProduct = trim(($_POST['productQuantity'])); //add to form - validation
    
    if (isstetData($title, $describe, $status, $productUnit)) {
        header("location:../editProduct.php?error=valueIncorrect");
        exit();
    }
    if (isNotNull($title, $describe, $status)) {
        header("location:../editProduct.php?error=valueIncorrect");
        exit();
    }

    if (correctTitle($title)) {
        header("location:../editProduct.php?error=titleIncorrect");
        exit();
    }

    if (correctDescribe($describe)) {
        header("location:../editProduct.php?error=desribeIncorrect");
        exit();
    }

    if (correctStatus($status)) {
        header("location:../editProduct.php?error=statusIncorrect");
        exit();
    }

    if (isset($conn)) {

        $sqlInsert = "INSERT INTO product( `product_category`, `product_name`, `product_describe`, `product_status`, `product_removed`,`product_EAN`,`product_quantity`,`product_price_net`,`product_VAT`,`product_unit`) 
VALUES ('towary','$title','$describe','$status',1,'$EANproduct','$quantityProduct','$productPriceNet','$productVat','$unitProduct')";

        mysqli_query($conn, $sqlInsert);

        header("location:../productsList.php?dodanoNowyProdukt");
        exit();
    } else {
        header("location:../editProduct.php?error=error3");
        exit();
    }
} else {
    header("location:../editProduct.php?error=error4");
    exit();
}