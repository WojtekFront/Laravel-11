<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "valueIncorrect") {
        echo "<p>Produkt nie został dodany</p>";
    } else if ($_GET["error"] == "titleIncorrect") {
        echo "<p>nazwa produktu niepoprawna</p>";
    } else if ($_GET["error"] == "desribeIncorrect") {
        echo "<p>Opis niepoprawny</p>";
    } else if ($_GET["error"] == "statusIncorrect") {
        echo "<p>Status niepoprawny</p>";
    } else if ($_GET["error"] == "removeIncorrect") {
        echo "<p>Towar nie został usunięty</p>";
    } else if ($_GET["error"] == "error1") {
        echo "<p>Powtórz czynność</p>";
    } else if ($_GET["error"] == "error2") {
        echo "<p>Powtórz czynność</p>";
    } else if ($_GET["error"] == "error3") {
        echo "<p>Powtórz czynność</p>";
    } else if ($_GET["error"] == "error4") {
        echo "<p>Powtórz czynność</p>";
    }
}

function remeberEvent(){
    //
}