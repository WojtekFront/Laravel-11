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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">PANEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productsList.php">LISTA</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TOWARY
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="editProduct.php">edycja</a>
                        <a class="dropdown-item" href="editProduct.php">dodawanie</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        POMOC
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="admin.php">Instrukcja</a>
                    </div>
                </li>
                
                
            </ul>
            <div class="my-2 mr-sm-2">
            <?php
                    if (isset($_SESSION["userid"])) {
                        echo '<a href ="include/admLogout.php">Wylogowanie</a><br>';
                        echo '<div class="loginUser"> Użytkownik: ' . $_SESSION["username"] . "</div>";
                    }
                    ?>
            </div>

        </div>

    </nav>