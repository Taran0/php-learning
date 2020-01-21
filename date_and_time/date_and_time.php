<?php
//időzóna beállítása
date_default_timezone_set("Europe/Budapest");

//current time in seconds
//default-ban a server time-ot kéri le (localhost a xampp-ét)
//átállítása: date_default_timezone_set("Europe/Budapest");
//now: 1567699395
echo time();

echo "<br>";

//time() fv formázása
//arg1:format, arg2:current time in seconds
$DateTime = strftime("%Y. %m. %d., %H:%M:%S", time());
echo $DateTime;

//current time in sql date format
$DateTimeSql = strftime("%Y-%m-%d %H:%M:%S", time());

$ezmiez = time(5*3600+0*60);
echo "ezmeiz:";
echo $ezmiez;

?>