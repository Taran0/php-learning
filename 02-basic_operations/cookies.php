<!DOCTYPE html>
<?php
//beállítás - setcooke(name, value, time(mennyi ideig legyen a user gépén))
//+sec*min*hours*days (szóval 30 napig) - mert másodpercben van megadva a time
$expire = time()+60*60*24*30;
setcookie("user","jóska",$expire)

?>
<html>
<head>
    <title>Cookies</title>
</head>
<body>


<?php
//session - reg kell hozzá és lesznek user info-id
//cookies - sima látogatók és mentesz róluk adatokat

//az eltárolt cookie használata 
echo $_COOKIE['user'] . "<br>";

//az összes infót kiiírja a cookie-ról
print_r($_COOKIE);
?>

</body>
</html>