<?php
function emptyInputSignup($name, $email, $password, $password2)
{
    $result;
    if (empty($name) || empty($email) || empty($password) || empty($password2)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidName($name)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $password2)
{
    $result;
    if ($password !== $password2) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $name, $email)
{
    $sql = "SELECT * FROM users WHERE user_name =? OR user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email); //s-corresponding variable has type string
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $password)
{
    $sql = "INSERT INTO users (user_name, user_email, user_PWD ) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../rejestracja.php?error=dontadd");
        exit();
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../rejestracja.php?error=add");
    exit();
}

function emptyInPutLogin($userIn, $passwordIn)
{
    $result;
    if (empty($userIn) || empty($passwordIn)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $userIn, $passwordIn)
{
    $uidExists = uidExists($conn, $userIn, $userIn); 
    $hash;
    $sql = "SELECT user_pwd FROM users WHERE user_name='$userIn'";
        if ($resultPass = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_row($resultPass)) {
                //var_dump($row[4]);
              $hash=  $row[0];
            }}
    $checkPwd = password_verify($passwordIn, $hash);

    if ($checkPwd == false) {
        header("location: ../index.php?error=wrongPassword");
        exit();
    }
    elseif ($checkPwd == true) {
        session_start();
        $_SESSION["userid"] = $uidExists["users_id"];
        $_SESSION["username"] = $uidExists["user_name"];
        header("location: ../index.php?correctLogin");
        exit();
    }else{
        header("location: ../index.php?error=last");
        exit();
    }
}