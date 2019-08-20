<!DOCTYPE html>
<html>
<head>
    <title>Loops</title>
</head>
<body>


<?php
//while
//erre használjuk while(feltétel1 && feltétel2 && feltétel3...)
$num = 0;
while ($num < 30) {
    $num++;
    echo $num . "<br>";
}

//do while
//egyszer mindenképp lefut
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 4);

//for
//erre használjuk: végigpörgetni dolgokat
for ($year = 1940; $year < 2019; $year++) {
    echo $year . "<br>";
}

$szinek = array("fehér", "piros", "fekete");

for ($i = 0; $i < 3; $i++) {
    echo $szinek[$i] . "<br>";
}

//foreach
$cities = array("Pécs", "Szigetvár", "Kleinarl");
foreach ($cities as $values) {
    echo $values . "<br>";
}

$emberek = array("Balazs" => 32, "Orsi" => 29);

foreach($emberek as $kulcs=>$value){
    echo "Kulcs: " . $kulcs . ", Érték: " . $value . "<br>"; 
}



?>

</body>
</html>