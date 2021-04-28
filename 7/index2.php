<?php
session_start();

if (isset($_SESSION['ilosc'])) {

    echo "<form action=index2.php method=POST>";
    for ($i = 1; $i <= $_SESSION['ilosc']; $i++) {
        echo "Imie $i: <input type=text name=imie$i><br>";
        echo "Nazwisko $i: <input type=text name=nazwisko$i><br>";
        echo "E-mail $i: <input type=email name=email$i><br><br>";
    }
    echo "<input type=submit name=zapisz value=Zapisz>";
    echo "</form>";
    echo "<a href=index3.php><button type=button>Wyswietl</button></a>";
    for ($i = 1; $i <= $_SESSION['ilosc']; $i++) {
        if (isset($_POST["imie$i"]) && isset($_POST["nazwisko$i"]) && isset($_POST["email$i"])) {
            $_SESSION["imie$i"] = $_POST["imie$i"];
            $_SESSION["nazwisko$i"] = $_POST["nazwisko$i"];
            $_SESSION["email$i"] = $_POST["email$i"];
        }
    }
    if (isset($_POST['zapisz'])) echo "<br><br>Zapisano!";
}
