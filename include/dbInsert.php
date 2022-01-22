<?php
include 'dbConn.php';
include 'dbValidation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['productTitle']);
    $describe = trim($_POST['productDescribe']);
    $status = trim($_POST['productStatus']);

    if (isstetData($title, $describe, $status)) {
        echo "1.komunikat";
    }
    if (isNotNull($title, $describe, $status)) {
        echo "2.komunikat";
    }

    if (correctTitle($title)) {

        echo "3.komunikat";
    }

    if (correctStatus($status)) {

        echo "4.komunikat";
    }

    if (isset($conn)) {

        $sqlInsert = "INSERT INTO product( `product_category`, `product_name`, `product_describe`, `product_status`, `product_removed`) 
VALUES ('towary','$title','$describe','$status',1)";

        mysqli_query($conn, $sqlInsert);

        header("location:../productsList.php?dodanoNowyProdukt");
    } else {
        echo "ostatni komunikat";
    }
} else {
}
