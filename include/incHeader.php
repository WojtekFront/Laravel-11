<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title; ?></title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav>
        <ul class="nav-links">
            <li>
                <a href="index.php">Panel</a>
            </li>
            <li>
                <a href="productsList.php">Lista</a>
            </li>
            <li>
                <a href="editProduct.php">Edycja</a>
            </li>
            <li>
                <a href="admin.php">Instrukcja</a>
            </li>
            <li >
                <?php
                if (isset($_SESSION["userid"])) {
                    echo '<a href ="include/admLogout.php">Wylogowanie</a><br>';
                    echo '<div class="loginUser"> Użytkownik: ' . $_SESSION["username"]."</div>";
                }
                ?>
            </li>
        </ul>
        <br><br>
    </nav>