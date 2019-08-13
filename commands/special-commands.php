<!DOCTYPE html>
<html>
<head>
    <title>Special commands</title>
</head>
<body>


<?php
//data and time
echo date("Y. M. d., D - H:m:s") . "<br>";


//random - by refreshing a browser
$random_num = mt_rand() . "<br>";
echo $random_num;

//titkosítás
$password = 12345;
$change = md5($password);
echo $change;
?>

</body>
</html>