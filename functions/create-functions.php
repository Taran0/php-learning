<!DOCTYPE html>
<html>
<head>
    <title>PHP functions</title>
</head>
<body>


<?php
function f1(){
    $age = 32;
    $name = "Balázs";
    echo "My name is " . $name . " and i'm " . $age . "years old.<br><br>";
}

f1();

function f2() {
    $value = 0;
    while($value<=20){
        $value++;
        echo $value . "<br>";
    }
}

f2();
?>

</body>
</html>