<!DOCTYPE html>
<!--Zad 1-->
<html>


<head>
    <title>Zad 1</title>
</head>

<body>
    <form action="index.php" method="POST">
        <table>
            <tr>
                <td><label for="kalkulator">Typ dzialania: </label></td>
                <td>
                    <select name="kalkulator">
                        <option value="dodawanie">dodawanie</option>
                        <option value="odejmowanie">odejmowanie</option>
                        <option value="mnozenie">mnozenie</option>
                        <option value="dzielenie">dzielenie</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Podaj pierwsza liczbe:</td>
                <td><input required type="number" name="liczba1" value="liczba1"></td>
            </tr>
            <tr>
                <td>Podaj druga liczbe:</td>
                <td><input required type="number" name="liczba2" value="liczba2"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Wyślij"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['kalkulator'])) {
        if ($_POST['kalkulator'] == "dodawanie") {
            echo "Wynik: ", $_POST['liczba1'] + $_POST['liczba2'];
        } elseif ($_POST['kalkulator'] == "odejmowanie") {
            echo "Wynik: ", $_POST['liczba1'] - $_POST['liczba2'];
        } elseif ($_POST['kalkulator'] == "mnozenie") {
            echo "Wynik: ", $_POST['liczba1'] * $_POST['liczba2'];
        } elseif ($_POST['kalkulator'] == "dzielenie") {
            echo "Wynik: ", $_POST['liczba1'] / $_POST['liczba2'];
        }
    }



    ?>

</body>

</html>