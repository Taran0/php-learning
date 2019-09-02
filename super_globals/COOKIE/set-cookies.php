<!DOCTYPE html>
<?php
//time(ret: in sec) + sec*min*hours*days (szóval 30 napig)
$expire = time()+60*60*24*30;

//setcookie(name, value, expire time)
setcookie("juzer","jóska",$expire)

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
echo $_COOKIE['juzer'] . "<br>";

//az összes infót kiiírja a cookie-ról
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>

</body>
</html>