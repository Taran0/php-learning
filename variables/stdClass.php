<?php
//stdClass objektum - olyan mint a struktúra más nyelvben
$szemely = new stdClass();
$szemely->vezNev="Kis";
$szemely->kerNev="Pista"; 
$szemely->kor="52";
$szemely->email="kp@gmail.com";

echo "<pre>";
print_r($szemely);
echo "</pre>";

echo $szemely->vezNev;