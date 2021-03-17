<?php

//1.1

function kostka(){
    $r=rand(1,6);
    return $r;
}
echo ("Wynik rzutu: ").kostka();

//1.2

function srednica($s){
    return 2*$s;
}
$r=5;
echo ("<br>Srednica wynosi: ").srednica($r);

//1.3

function cenzura($text){
    $tab[]="pierogi";
    $tab[]="mocno";
    foreach($tab as $slowo){
        $text=str_replace($slowo,'****',$text);
    }
    return $text;
}
$tekst="<br>lubie pierogi bardzo mocno";
echo cenzura($tekst);

//1.4

function pesel($p){
    $dd=substr($p,4,2);
    $mm=substr($p,2,2);
    $rr=substr($p,0,2);
    if($mm<=12){
        echo ("<br>Data: ".$dd."-".$mm."-19".$rr);
    }
    else {
        echo ("<br>Data: ".$dd."-".($mm-20)."-20".$rr);
    }
}
$pesel="00301712345";
pesel($pesel);

//1.5

function trojkat(){
    $a=2;
    $h=3;
    $p=($a*$h)/2;
    return $p;
}
function prostokat(){
    $a=4;
    $b=3;
    $p=$a*$b;
    return $p;
}
function trapez(){
    $a=5;
    $b=2;
    $h=3;
    $p=(($a+$b)*$h)/2;
    return $p;
}
$a=0;  //0-trojkat 1-prostokat 2-trapez
switch ($a){
    case 0:
        echo ("<br>Pole trojkata wynosi: ").trojkat();
        break;
    case 1:
        echo ("<br>Pole prostokata wynosi: ").prostokat();
        break;
    case 2:
        echo ("<br>Pole trapezu wynosi: ").trapez();
        break;
}
?>