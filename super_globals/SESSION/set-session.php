<?php
//session: server side cookie
//gyorsabb, biztonságosabb
//ha kilpész lejár az érvényessége

session_start();

$_SESSION['name'] = "Taran";
$name = $_SESSION['name'];
echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>session</title>
</head>
<body>
    
</body>
</html>