
<?php
//Zad 2.1
function tablica($index,$tab){
for($i=0;$i<10;$i++){
    $tab[$i]=rand(0,10);
}
return $tab[$index-1];
}
    $tab[]=0;
    $index=4;
    echo "tab[".$index."]=".tablica($index,$tab);
?>
