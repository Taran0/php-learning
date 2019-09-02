<?php
//előre kell rakni a cookie beállításokat, mert ha vmi nem ok
//akkor más html oldalt fog betölteni
$expire = time()+60*60*24;
setcookie("user","jóska",$expire);

//nincs külön unset function
//v1
//$expire_unset = time()-60*60*24;
//setcookie("user", "jóska", $expire_unset);

//v2
setcookie("user", null);

//v3
//setcookie("user", "", $expire_unset);

if(isset($_COOKIE['user'])){
    echo "cookie is set with the nem of " . $_COOKIE['user'];
}else{
    echo "cookie is unset";
}

?>

<!DOCTYPE html>

<html>
<head>
    <title>Unset Cookies</title>
</head>
<body>


<?php
//ide nem írunk cookie-s kódot!! csak a html elé
?>

</body>
</html>