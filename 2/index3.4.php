
<?php
//Zad 3.4
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
$a = 11;
pierwsza($a);
?>
