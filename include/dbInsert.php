<?php
include 'dbConn.php';
include 'dbValidation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['productTitle']);
    $describe = trim($_POST['productDescribe']);
    $status = trim($_POST['productStatus']);
    $categoryProduct = trim($_POST['productCategory']);
    $unitProduct = trim($_POST['productUnit']);
    $priceProduct = trim($_POST['productPrice']);
    $quantityProduct = trim(($_POST['productQuantity']));
    $productVat = trim($_POST['vatProduct']);
    
    if (isstetData($title, $describe, $status)) {
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

        $sqlInsert = "INSERT INTO product( `product_category`, `product_name`, `product_describe`, `product_status`, `product_removed`) 
VALUES ('towary','$title','$describe','$status',1)";

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