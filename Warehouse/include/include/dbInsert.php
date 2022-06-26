<?php
include 'dbConn.php';
include 'dbValidation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['productTitle']);
    $describe = trim($_POST['productDescribe']);
    $status = trim($_POST['productStatus']);

    if (isstetData($title, $describe, $status)) {
        header("location:../editProduct.php?valueIncorrect");
        exit();
    }
    if (isNotNull($title, $describe, $status)) {
        header("location:../editProduct.php?valueIncorrect");
        exit();
    }

    if (correctTitle($title)) {
        header("location:../editProduct.php?titleIncorrect");
        exit();
    }

    if (correctDescribe($describe)) {
        header("location:../editProduct.php?desribeIncorrect");
        exit();
    }

    if (correctStatus($status)) {
        header("location:../editProduct.php?statusIncorrect");
        exit();
    }

    if (isset($conn)) {

        $sqlInsert = "INSERT INTO product( `product_category`, `product_name`, `product_describe`, `product_status`, `product_removed`) 
VALUES ('towary','$title','$describe','$status',1)";

        mysqli_query($conn, $sqlInsert);

        header("location:../productsList.php?dodanoNowyProdukt");
        exit();
    } else {
        echo "ostatni komunikat";
    }
} else {
}
