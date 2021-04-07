<!DOCTYPE html>
<!--Zad 4-->
<html>

<head>
    <title>Zad 4</title>
</head>

<body>
    <form action="index.php" method="POST">
        <table>
            <tr>
                <td>Podaj liczbe:</td>
                <td><input type="number" name="liczba"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Wyślij"></td>
            </tr>
        </table>
    </form>
    <?php
    function pierwsza($a)
    {
        $pierwsza = true;
        $iteracja = 0;
        if ($a <= 1) {
            $pierwsza = false;
        } else {
            for ($i = 2; $i < $a; $i++) {
                $iteracja++;
                if ($a % $i == 0) {
                    $pierwsza = false;
                    break;
                }
            }
        }
        if ($pierwsza == true) {
            echo "Liczba " . $a . " jest liczba pierwsza. Liczba iteracji petli: " . $iteracja;
        } else {
            echo "Liczba " . $a . " nie jest liczba pierwsza. Liczba iteracji petli: " . $iteracja;
        }
    }
    if (isset($_POST['liczba'])) pierwsza($_POST['liczba']);


    ?>

</body>

</html>