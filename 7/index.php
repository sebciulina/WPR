<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <form action="index.php" method="POST">
        <label for="ilosc">Ilosc osob: </label>
        <select name="ilosc">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <br>
        Imie: <input required type="text" name="imie">
        <br>
        Nazwisko: <input required type="text" name="nazwisko">
        <br>
        Numer karty: <input required type="number" name="nrkarty">
        <br>
        E-mail: <input type="email" name="email">
        <br>
        <input type="submit" value="Wyślij">
    </form>

    <?php
    if (isset($_POST['ilosc']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['nrkarty']) && isset($_POST['email'])) {
        $_SESSION['ilosc'] = $_POST['ilosc'];
        $_SESSION['imie'] = $_POST['imie'];
        $_SESSION['nazwisko'] = $_POST['nazwisko'];
        $_SESSION['nrkarty'] = $_POST['nrkarty'];
        $_SESSION['email'] = $_POST['email'];
    }
    if (isset($_SESSION['imie']) && isset($_SESSION['nazwisko']) && isset($_SESSION['nrkarty'])) {
        header("Location: index2.php");
    }

    ?>

</body>

</html>