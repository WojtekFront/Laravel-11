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

    if(removeProduct($deleteProduct)){
        header("location:../editProduct.php?error=removeIncorrect");
        exit();
    }

    if (isset($conn)) {
        $sqlUpdate = "UPDATE product SET product_name='$title', product_describe='$describe', product_status='$status', product_removed='$deleteProduct'
        WHERE product_id='$productID'";

        mysqli_query($conn, $sqlUpdate);
        // var_dump($describe);
        header("location:../productsList.php?edytowanoProdukt");
    } else {
        header("location:../editProduct.php?error=error1");
        exit();
    }
} else {
    header("location:../editProduct.php?error=error2");
        exit();
}
