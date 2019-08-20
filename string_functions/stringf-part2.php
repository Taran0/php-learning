<?php
$str = "hello world";

//cserélő
echo $str . "<br>";
echo str_replace("world", "turiszt", $str) . "<br>";

//levágó
//arg: szó,kezdet, vég
echo substr($str,0,5) . "<br>";

//keverés
echo str_shuffle($str) . "<br>";
//haszn - ellenőrző kód
$char_base = "abc123";
$ell_kod_nyers = str_shuffle($char_base);
$ell_kod = substr($ell_kod_nyers,0,4);
echo $ell_kod . "<br>";

//összehasonlít
$str1 = "szeretem a narancsot";
$str2 = "szeretem a palacsintát";
similar_text($str1, $str2, $result);
echo $result . "<br>";