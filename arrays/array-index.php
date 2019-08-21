<?php
$szamok = array(5,8,14);

echo "teljes tömb" . "<br>";
print_r($szamok);
echo "<br><br>";

echo "current" . "<br>";
echo current($szamok) . "<br>";

echo "next" . "<br>";
next($szamok);
echo current($szamok) . "<br>";

echo "reset" . "<br>";
reset($szamok);
echo current($szamok) . "<br>";

echo "end" . "<br>";
end($szamok);
echo current($szamok) . "<br>";