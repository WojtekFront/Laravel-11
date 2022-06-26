<?php
include 'dbConn.php';
include 'dbValidation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = trim($_POST['productID']);
    $title = trim($_POST['productTitle']);
    $describe = $_POST['productDescribe'];
    $status = trim($_POST['productStatus']);
    $deleteProduct = trim($_POST['productEdit']);


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
        $sqlUpdate = "UPDATE product SET product_name='$title', product_describe='$describe', product_status='$status', product_removed='$deleteProduct'
        WHERE product_id='$productID'";

        mysqli_query($conn, $sqlUpdate);
        // var_dump($describe);
        header("location:../productsList.php?edytowanoProdukt");
    } else {
        echo "ostatni komunikat";
    }
} else {
}
