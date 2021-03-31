
<?php
//Zad 2.2
$a="Niemcy";
$tab["Polska"]="Polak";
$tab["Niemcy"]="Niemiec";
foreach($tab as $klucz => $wartosc){
    if($klucz==$a){
       echo $wartosc; 
    }  
}
?>
