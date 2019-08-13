<?php
$a = true;
$b = 1;

// ha az értékük és a típusuk is egyenlő
if ($a === $b) {
    echo "A két változó egyenlő.";
}

if ($a !== $b) {
    echo "Vagy a típus vagy az érték nem egyenlő" . "<br>";
}

//nem egyenlő
if ($a != $b) {
    echo "egyenlő az értékük" . "<br>";
} else {
    echo "nem egyenlő az értékük" . "<br>";
}

//ua mint felette
if ($a <> $b) {
    echo "Vagy a típus vagy az érték nem egyenlő" . "<br>";
} else {
    echo "nem egyenlő az értékük" . "<br>";
}

//and = &&
//or = ||
