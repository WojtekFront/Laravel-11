<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>


<!-- tekst powitalny -->
<div>
    <h1>Program do zarządzania towarami <b>W-FRONT 1.1</b></h1>
    <h2>program magazynowy posiada następujące opcje:</h3>
        <h3>
            <ul>
                <li>- dodawanie towarów,</li>
                <li>- odjemowanie towarów,</li>
                <li>- edycja towarów,</li>
                <li>- wyświetlanie towarów</li>

            </ul>
</div>
<!-- logowanie -->
<?php if(!isset($_SESSION["username"])){ ?>
<section>
    <!-- otwórz div zaloguj sie -->
    <div>
        </br></br>
        <h2>FORMULARZ LOGOWANIA:</h2>
        <form action="include/admLogin.php" method="post">
            <label for="logIn">Podaj login lub e-mail:</label>
            <input type="text" id="logIn" name="logIn" placeholder="login / e-mail" value="admin"></br>
            <label for="passwordIn">Podaj hasło:</label>
            <input type="password" id="passwordIn" name="passwordIn" placeholder="hasło" value="adffmin"></br>

            <button type="submit" name="submit">Zaloguj</button></br></br>
        </form>
        <a href="rejestracja.php">Rejestracja</a>
        <!--zamknij div zaloguj się -->
    </div>
    <?php
}
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
<!-- zamknięcie logowania -->





<?php
include_once 'include/incFooter.php';
?>