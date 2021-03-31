
<?php
//Zad 3.2
function kostka($a)
{
    $tab[] = 0;
    for ($i = 0; $i < $a; $i++) {
        $r = rand(1, 6);
        $tab[$i] = $r;
        echo $tab[$i] . " ";
    }
}
$a = 5;
echo ("Rzuciles kostka " . $a . " razy a tutaj sa wyniki: ");
kostka($a);
?>
