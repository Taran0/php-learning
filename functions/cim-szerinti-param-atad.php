<?php
function fv($x){
    $x++;
    echo $x . "<br>";
}
//nem ua az két x
//kt különböző helyen tárolt változó, csak a nevük egyezik
$x = 5;
fv($x);
echo $x . "<br>";


//memo cím szerint adja át függvényhíváskor a változót(argként)
//ez az elegáns, nem a globális változók használata
function fv2(&$ref){
    $ref++;
    echo $ref . "<br>";
}

$x = 5;
fv2($x);
echo $x . "<br>";