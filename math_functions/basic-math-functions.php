<?php
//abszolútérték
$a = -5;
echo abs($a) . "<br>";

//kerekítés
$b = 7.28;
echo round($b) . "<br>";

//lefelé kerekítés
$c = 5.5;
echo floor($c) . "<br>";

//felfelé kerekítés
$d = 5.5;
echo ceil($d) . "<br>";

//gyök
$e = 25;
echo sqrt($e) . "<br>";

//hatványozó
$f = 2;
//pow(alap, kitevő)
echo pow($f, 3) . "<br>";

//min, max
$szamok = array(4,3,6,76,3,2,4);
echo min($szamok) . "<br>";
echo max($szamok) . "<br>";

//szögf
$g = 0.5; //radiánban
echo sin($g) . "<br>";

//log - hányadik hatványra kell emelnek a 10-et hogy 100 legyen
$h = 100;
echo log10($x);
