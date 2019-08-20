<?php
$str = "Hello world!";

//karakterszám
echo strlen($str);

//szószám
echo str_word_count($str);

//visszafelé kiirja
echo strrev($str);

//keresés a kifejezésben
//strpos(miben, mit, honnan kezdje)
//return: hányadik karaktertől kezdődik
echo strpos($str, "world");