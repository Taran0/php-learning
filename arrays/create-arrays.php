<!DOCTYPE html>
<html>
<head>
    <title>Arrays</title>
</head>
<body>


<?php
$cities = array("Pécs", "Szigetvár", "Kleinarl");
echo $cities[0] . "<br>";
echo "<br>";

$numbers = array(2, 5, 8, -2);
echo $numbers[0] . "<br>";
echo $numbers[3] . "<br>";
echo "<br>";

//length
echo count($numbers) . "<br>";
echo sizeof($numbers) . "<br>";
echo "<br>";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "<br>";
}

//tömb elemekhez adat hozzárendelés -> nem index hanem elemnév alapján
$emberek = array("Balazs" => 32, "Orsi" => 29);

echo $emberek[0] . "<br>";
echo $emberek["Balazs"];

?>

</body>
</html>