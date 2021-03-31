
<?php
//Zad 3.1
function maks($tab)
{
    $a = 0;
    for ($i = 0; $i < 10; $i++) {
        $tab[$i] = rand(0, 10);
        echo $tab[$i] . " ";
    }
    for ($i = 0; $i < 10; $i++) {
        if ($tab[$i] > $a) {
            $a = $tab[$i];
        }
    }
    echo "<br>Najwiekszy element(for): " . $a;
    $a = 0;
    $i = 0;
    while ($i < count($tab)) {
        if ($tab[$i] > $a) {
            $a = $tab[$i];
        }
        $i++;
    }
    echo "<br>Najwiekszy element(while): " . $a;
    $a = 0;
    $i = 0;
    do {
        if ($tab[$i] > $a) {
            $a = $tab[$i];
        }
        $i++;
    } while ($i < count($tab));
    echo "<br>Najwiekszy element(do while): " . $a;
    $a = 0;
    foreach($tab as $value){
        if($value>$a){
            $a=$value;
        }
    }
    echo "<br>Najwiekszy element(foreach): " . $a;
}
$tab[] = 0;
maks($tab);
?>
