<?php
define('title', 'magazyn');
include_once 'include/incHeader.php';
include_once 'include/dbConn.php';
?>


<!-- Kolumny towarów:<br><br>

Użytkownicy: -->

Wersja W-FRONT 1.0 jest stale rozbudowaną strukturą. <br>
W tej zakładce od wersji 4.0 będzie możlowość ustawienia własnej konfiguracji:<br>
<br>
<br>
Instrukacja obsługi:<br>
1. wstęp<br>
Program magazynowy W-FRONT 1.0 umożliwia:<br>
- dodawanie produktów,<br>
- usuwanie produktów,<br>
- edycję produktów.<br>
<br>
2. Opis elementów<br>
Program magazynowy można odtworzyć na przeglądarce zarówno na komputerze jak<br>
i na urządzeniach mobilnych. <br>
Wersja W-FRONT 1.0 zalecamy odtwarzać na urządzeniach komputerowych. <br>
Aktualnie był używany na Google Chrome Version 97.0.4692.99 oraz Brave Version 1.34.80 Chromium.<br>


    2.1.Omówienie architektury:<br>
        2.1.1.Zakładka STRONA GŁÓWNA: <br>
            - jest miejscem informacyjnym,<br>
            - znajduje się tu opcja do zalogowania,<br>
            - włączenia dokumentacji,<br>
        2.1.2. Zakładka LISTA:<br>
            - wyświetla wszystkie produkty zgodnie ze schematem:<br>
                ID, tytuł, Opis, status<br>
            - sortowanie w polu Lista jest domyślnie po edycji,<br>
            - lista aktualnie nie oferuje możliwości wyszukania produktu. Wyszukanie produktu po<br>
              id jest możliwe w edycji,<br>
        2.1.3 Zakładka edycja:<br>
            - umożliwia dodawanie produktów,<br>
            - umożliwia edycję produktów<br>

<?php
include_once 'include/incFooter.php';
?>