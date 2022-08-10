<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>

<!-- tekst powitalny -->
<div>
    <h3>Program do zarządzania towarami <b>W-FRONT 1.1</b></h3>
    <h4>program magazynowy posiada następujące opcje:</h4>
    <ul>
        <li> dodawanie towarów,</li>
        <li> odjemowanie towarów,</li>
        <li> edycja towarów,</li>
        <li> wyświetlanie towarów</li>
    </ul>
</div>
<!-- logowanie -->
<?php if (!isset($_SESSION["username"])) { ?>
    <section>
        <!-- open loginForm -->

        <div class="loginForm">
            </br></br>
            <h3>FORMULARZ LOGOWANIA:</h3>
            <form action="include/admLogin.php" method="post">
                <div class="form-group">
                    <label for="logIn">Podaj login lub e-mail:</label><br>
                    <input type="text" class="col-md-2 mb-3" id="logIn" name="logIn" aria-describedby="emailHelp" placeholder="login / e-mail">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="passwordIn">Podaj hasło:</label><br>
                    <input type="password" class="col-md-2 mb-3" id="passwordIn" name="passwordIn" placeholder="hasło">
                </div>
                <button type="submit" name="submit" class="btn btn-dark mb-3">Zaloguj</button>
            </form>
            <br>
            <div class="btn btn-dark mb-2">
                <a href="rejestracja.php">Rejestracja</a>
            </div>
        </div>
        <!--close loginForm -->
    <?php
}
// error info from ???
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emtyLogField") {
        echo "<p>Uzupełnij wszystkie dane</p>";
    } else if ($_GET["error"] == "wrongPassword") {
        echo "<p> Niepoprawne dane do logowania";
    } else if ($_GET["error"] == "3") {
        echo "<p> </p>";
    } else if ($_GET["error"] == "3") {
        echo "<p> </p>";
    }
}
    ?>
    </section>
    <?php
    include_once 'include/incFooter.php';
    ?>