<?php
session_start();
if (isset($_SESSION['ilosc'])) {
    if (isset($_SESSION['imie']) && isset($_SESSION['nazwisko']) && isset($_SESSION['nrkarty']) && isset($_SESSION['email'])) {
        echo "Dane ogolne<br>";
        echo "Imie zamawiajacego: " . $_SESSION['imie'] . "<br>";
        echo "Nazwisko zamawiajacego: " . $_SESSION['nazwisko'] . "<br>";
        echo "Numer karty: " . $_SESSION['nrkarty'] . "<br>";
        echo "E-mail: " . $_SESSION['email'] . "<br><br>";
    }
    for ($i = 1; $i <= $_SESSION['ilosc']; $i++) {
        if (isset($_SESSION["imie$i"]) && isset($_SESSION["nazwisko$i"]) && isset($_SESSION["email$i"])) {
            echo "Dane osoby " . $i . "<br>";
            echo "Imie: " . $_SESSION["imie$i"] . "<br>";
            echo "Nazwisko: " . $_SESSION["nazwisko$i"] . "<br>";
            echo "E-mail: " . $_SESSION["email$i"] . "<br><br>";
        }
    }
} else echo "Brak danych.";
session_destroy();
