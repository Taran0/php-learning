<?php

//normal variables
//output: 111
function normalVar(){
    $value = 1;
    echo $value . "<br>";
    $value++;
}

normalVar();
normalVar();
normalVar();

echo "<br><br><br>";

//static variables
//output: 123
function staticVar(){
    static $value = 1;
    echo $value . "static <br>";
    $value++;
}

staticVar();
staticVar();
staticVar();