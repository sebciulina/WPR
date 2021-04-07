<!DOCTYPE html>
<!--Zad 2-->
<html>

<head>
    <title>Zad 2</title>
    <style>
        .form1,
        .php1 {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="form1">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Dane</legend>
                <table>
                    <tr>
                        <td><label for="ilosc">Ilosc osob: </label></td>
                        <td>
                            <select name="ilosc">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Imie: <a style="color: red;">*</a></td>
                        <td><input required type="text" name="imie"></td>
                    </tr>
                    <tr>
                        <td>Nazwisko: <a style="color: red;">*</a></td>
                        <td><input required type="text" name="nazwisko"></td>
                    </tr>
                    <tr>
                        <td>Adres: <a style="color: red;">*</a></td>
                        <td><input required type="text" name="adres"></td>
                    </tr>
                    <tr>
                        <td>Dane karty kredytowej: <a style="color: red;">*</a></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&emsp;Numer karty:</td>
                        <td><input required type="number" min="0" maxlength="16" name="nrkarty"></td>
                    </tr>
                    <tr>
                        <td>&emsp;CVV:</td>
                        <td><input required type="text" maxlength="6" name="cvv"></td>
                    </tr>
                    <tr>
                        <td>Adres e-mail:</td>
                        <td><input type="email" name="adresemail"></td>
                    </tr>
                    <tr>
                        <td>Pobyt:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&emsp;Od:</td>
                        <td><input type="date" name="dataod"></td>
                    </tr>
                    <tr>
                        <td>&emsp;Do:</td>
                        <td><input type="date" name="datado"></td>
                    </tr>
                    <tr>
                        <td>&emsp;Godzina przyjazdu:</td>
                        <td><input type="time" name="godzina"></td>
                    </tr>
                    <tr>
                        <td>Dodatkowe informacje:</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&emsp;Lozko dla dziecka:</td>
                        <td><input type="checkbox" name="lozko"></td>
                    </tr>
                    <tr>
                        <td>&emsp;Popielniczka:</td>
                        <td><input type="checkbox" name="popielniczka"></td>
                    </tr>
                    <tr>
                        <td>&emsp;Klimatyzacja:</td>
                        <td><input type="checkbox" name="klimatyzacja"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Wyślij"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <br><br>
    <div class="php1">
        <?php
        if (isset($_POST['ilosc']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['adres']) && isset($_POST['nrkarty']) && isset($_POST['cvv'])) {
            echo "<table>
            <caption>Podsumowanie</caption>
                <tr>
                    <td>Ilosc osob:</td>
                    <td>", $_POST['ilosc'], "</td>
                </tr>
            
                <tr>
                    <td>Imie: </td>
                    <td>", $_POST['imie'], "</td>
                </tr>
                <tr>
                    <td>Nazwisko: </td>
                    <td>", $_POST['nazwisko'], "</td>
                </tr>
                <tr>
                    <td>Adres: </td>
                    <td>", $_POST['adres'], "</td>
                </tr>
                <tr>
                    <td>Dane karty kredytowej: </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&emsp;Numer karty:</td>
                    <td>", $_POST['nrkarty'], "</td>
                </tr>
                <tr>
                <td>&emsp;CVV:</td>
                <td>", $_POST['cvv'], "</td>
            </tr>
            <tr>
                <td>Adres e-mail: </td>
                <td>", $_POST['adresemail'], "</td>
            </tr>
            <tr>
                <td>Pobyt: </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&emsp;Od: </td>
                <td>", $_POST['dataod'], "</td>
            </tr>
            <tr>
                <td>&emsp;Do: </td>
                <td>", $_POST['datado'], "</td>
            </tr>
            <tr>
                <td>&emsp;Godzina przyjazdu: </td>
                <td>", $_POST['godzina'], "</td>
            </tr>
            <tr>
                <td>Dodatkowe informacje: </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&emsp;Lozko dla dziecka: </td>
                <td>";
            if (isset($_POST['lozko'])) echo "tak";
            else echo "nie";
            echo "</td>
            </tr>
            <tr>
                <td>&emsp;Popielniczka: </td>
                <td>";
            if (isset($_POST['popielniczka'])) echo "tak";
            else echo "nie";
            echo "</td>
            </tr>
            <tr>
                <td>&emsp;Klimatyzacja: </td>
                <td>";
            if (isset($_POST['klimatyzacja'])) echo "tak";
            else echo "nie";
            echo "</td>
            </tr>
            </table>";
        }
        ?>
    </div>
</body>

</html>