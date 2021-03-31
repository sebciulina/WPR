
<?php
//Zad 3.3
function tabliczka($a)
{
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $a; $j++) {
            $pomocna = $i * $j;
            echo ($pomocna ."\t");
        }
        echo ("<br>");
    }
}
$a = 5;
tabliczka($a);
?>
