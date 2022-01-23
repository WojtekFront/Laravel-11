<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>

<!-- otwórz div załóż konto -->
<section>
    <div>
        <h2>FORMULARZ REJESTRACYJNY:</h2>
        <form action="include/admSignup.php" method="post">
            <label for="name">Podaj imię:</label>
            <input type="text" id="" name="name" placeholder="Podaj imię ..."></br>
            <label for="email">Podaj e-mail:</label>
            <input type="text" id="" name="email" placeholder="Podaj e-mail ..."></br>
            <label for="pwd">Podaj hasło:</label>
            <input type="password" id="" name="pwd" placeholder="Podaj hasło ..."></br>
            <label for="pwd2">Powtórz hasło:</label>
            <input type="password" id="" name="pwd2" placeholder="Powtórz hasło ..."></br>
            <button type="submit" name="submit">Zarejestruj się</button></br></br>
        </form>


        <!--zamknij div  załóż konto -->
    </div>
    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>uzupełnij dane</p>";
        } else if ($_GET["error"] == "name") {
            echo "<p> Wpisz poprawnie Twoje imię</br>
                Pole akceptuje tylko litery i cyfery </p>";
        } else if ($_GET["error"] == "email") {
            echo "<p>niepoprawny  e-mail</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Niepoprawny e-mail</p>";
        } else if ($_GET["error"] == "nametaken") {
            echo "<p>Użyj innej nazwy</p>";
        } else if ($_GET["error"] == "stmtFailed") {
            echo "<p>Powtórz czynność</p>";
        } else if ($_GET["error"] == "dontadd") {
            echo "<p>Powtórz czynność</p>";
        } else if ($_GET["error"] == "add") {
            echo "<p>Zostałeś dodany do bazy</p>";
        } else if ($_GET["error"] == "3") {
            echo "<p> </p>";
        } else if ($_GET["error"] == "3") {
            echo "<p> </p>";
        } else if ($_GET["error"] == "3") {
            echo "<p> </p>";
        }
    }

    ?>
</section>
<!-- otwórz div formularz kontaktowy -->
<div>
    <!-- zamnkij div formularz kontaktowy -->
</div>

</div>
<?php
include_once 'include/incFooter.php';
?>