<?php
function printarr($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . "<br>";
    }
}

$x = array(5, 2, 4, 9, 1);
printarr($x);
echo "<br>";

//növekvőbe rendez
sort($x);
printarr($x);
echo "<br>";

//csökkenőbe
rsort($x);
printarr($x);
echo "<br>";


//** asszociatív tömbök*/
function printasz($arr)
{
    foreach ($arr as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
}

$y = array("Péter" => 34, "Jóska" => 43, "Miska" => 22);
printasz($y);
echo "<br>";

//rendezése növ érték alapjén
asort($y);
printasz($y);
echo "<br>";

//csök érték al
arsort($y);
printasz($y);
echo "<br>";

//key alapján növ
ksort($y);
printasz($y);
echo "<br>";

//key alapján csökk
krsort($y);
printasz($y);
echo "<br>";