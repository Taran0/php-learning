<!DOCTYPE html>
<html>
<head>
    <title>Loops</title>
</head>
<body>


<?php
//while
$num = 0;
while($num<30){
    $num++;
    echo $num . "<br>";
}

//for
for($year=1940; $year<2019; $year++){
    echo $year . "<br>";
}

//foreach
$cities = array("Pécs","Szigetvár","Kleinarl");
foreach($cities as $values){
    echo $values . "<br>";
}

?>

</body>
</html>