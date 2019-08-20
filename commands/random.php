<?php
mt_srand(mktime()); //időhöz rögzített számgenerálás
echo mt_rand() . "<br>";

//0-10
echo mt_rand() % 10 . "<br>";
echo mt_rand(0, 10) . "<br>";

//1-10
echo mt_rand() % 10 + 1 . "<br>";
echo mt_rand(1, 10) . "<br>";

//tört generálása - 0-0.9
echo (mt_rand() % 10) / 10 . "<br>";

//tört generálása - 0-9.9 (külön az egész és a tört)
echo mt_rand() % 10 + (mt_rand() % 10) / 10 . "<br>";

//tört generálása - 0-9.99 (külön az egész és a tört)
echo mt_rand() % 10 + (mt_rand() % 100) / 100 . "<br>";