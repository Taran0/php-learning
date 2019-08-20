<?php
/*
    így ahogy itt van nem nagyon használjuk őket, mert
    olyanok mint a kurvák, mindenki megkapja őket, és nem azt kapod amit vársz :)
*/
$x = 5; //globális változó

function kiir()
{
    $x = 6; //lokális változó

    //globális használata itt v1
    global $x; 
    echo $x . "<br>";

    //globális használta itt v2
    $GLOBALS['x'] += 2;
    echo $x . "<br>";
}

kiir();
