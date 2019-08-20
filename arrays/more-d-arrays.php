<?php
//használata: db kezelésnél egy sor és a hozzá tartozó adatok
$autok = array(
    array("abc123", "BMW", 150),
    array("abc124", "Merci", 130),
    array("abc125", "Lambo", 200),
    array("abc126", "Ferrai", 250),
);
//kiiratás: 2 paraméter megadása
echo $autok[0][0];

//táblázatba kiiír
echo "<table border='1'>";
echo "<tr><td>Rendszám</td><td>Típus</td><td>Lóerő</td></tr>";
for ($i = 0; $i < count($autok); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($autok[$i]); $j++) {
        echo "<td>" . $autok[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
