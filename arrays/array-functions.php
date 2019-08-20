<?php
    $szinek = array("fekete", "fehér", "piros");
    echo "Méret: " . count($szinek) . "<br>";
    echo "<br>";

    //elemek hozzáadása a végéhez
    echo "array_push" . "<br>";
    array_push($szinek, "kék", "lila", "barna");
    print_r($szinek);
    echo "<br><br>";

    //több elem hozzáadása az elejéhez
    echo "array_unshift" . "<br>";
    array_unshift($szinek, "citromságra", "hupilila");
    print_r($szinek);
    echo "<br><br>";

    //egy elem törlése a végéről
    echo "array_pop" . "<br>";
    array_pop($szinek);
    print_r($szinek);
    echo "<br><br>";

    //egy elem törlése az elejéről
    echo "array_shift" . "<br>";
    array_shift($szinek);
    print_r($szinek);
    echo "<br><br>";

    