<?php




if (isset($_POST['submit'])) {
    $userIn = $_POST['logIn'];
    $passwordIn = $_POST['passwordIn'];
   
    //dodać walidację

    require_once 'dbConn.php';
    require_once 'admLoginFun.php';

    if (emptyInputLogin($userIn, $passwordIn) == !false) {
        header("location:../index.php?error=emtyLogField");
        exit();
    }else{ 

    loginUser($conn, $userIn, $passwordIn);
   }
}else{
    header("location:../index.php?error=emtyLogField");
        exit();
}
