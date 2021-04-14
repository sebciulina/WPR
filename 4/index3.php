<!DOCTYPE html>
<!--Zad 3-->
<html>

<head>
    <title>Zad 3</title>
    <style>
        .form1,
        .php1 {
            display: flex;
            justify-content: center;
        }

        .php1 table,
        .php1 td,
        .php1 tr {
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="form1">
        <form action="index3.php" method="POST">
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
                        <td><input type="submit" value="Wyślij">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <br><br>
    <div class="php1">
        <?php
        if (isset($_POST['ilosc']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['adres']) && isset($_POST['nrkarty']) && isset($_POST['cvv'])) {
            if (isset($_POST['lozko'])) $lozko = "tak";
            else $lozko = "nie";
            if (isset($_POST['popielniczka'])) $popielniczka = "tak";
            else $popielniczka = "nie";
            if (isset($_POST['klimatyzacja'])) $klimatyzacja = "tak";
            else $klimatyzacja = "nie";
            $list = array(
                array($_POST['ilosc'], $_POST['imie'], $_POST['nazwisko'], $_POST['adres'], $_POST['nrkarty'], $_POST['cvv'], $_POST['adresemail'], $_POST['dataod'], $_POST['datado'], $_POST['godzina'], $lozko, $popielniczka, $klimatyzacja)
            );
            $list2 = array(
                array("Ilosc osob", "Imie", "Nazwisko", "Adres", "Numer karty", "CVV", "Adres email", "Pobyt od", "Pobyt do", "Godzina przyjazdu", "Lozko dla dziecka", "Popielniczka", "Klimatyzacja")
            );
            if (file_exists("file.csv")) {
                $file = fopen("file.csv", "a");
            } else {
                $file = fopen("file.csv", "w");
                foreach ($list2 as $fields) {
                    fputcsv($file, $fields, ";");
                }
            }
            foreach ($list as $fields) {
                fputcsv($file, $fields, ";");
            }

            fclose($file);
            
            echo "<table>";
            if (($file = fopen("file.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    echo "<br>";
                    echo "<tr>";
                    for ($i = 0; $i < $num; $i++) {
                        echo "<td>" . $data[$i] . "</td>";
                    }
                    echo "</tr>";
                }
                fclose($file);
            }
            echo "</table>";
        }
        
        ?>
    </div>
</body>

</html>