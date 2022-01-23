<?php
if (isset($_POST["submit"])) {
    echo "it works";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $password2 = $_POST["pwd2"];

    require_once 'dbConn.php';
    require_once 'admLoginFun.php';


    if (emptyInputSignup($name, $email, $password, $password2) !== false) {
        header("location: ../rejestracja.php?error=emptyinput");
        exit();
    }
    if (invalidName($name) !== false) {
        header("location: ../rejestracja.php?error=name");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../rejestracja.php?error=email");
        exit();
    }
    if (pwdMatch($password, $password2) !== false) {
        header("location: ../rejestracja.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $name, $email) !== false) {
        header("location: ../rejestracja.php?error=nametaken");
        exit();
    }
    createUser($conn, $name, $email, $password);
} else {
    header("location: ../rejestracja.php");
    exit();
}
