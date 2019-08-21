<!DOCTYPE html>
<html>
<head>
    <title>Include and require functions</title>
</head>
<body>


<?php
//megjeleníti egy totál más php fájl tartalmát
//de ha nem elérhető, attól még ez a fájl lefut
include('create-table.php');

//ez a fájl csak akkor fut le, ha elérhető a require
require('create-table.php');
?>

</body>
</html>