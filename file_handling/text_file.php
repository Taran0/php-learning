<!DOCTYPE html>
<html>
<head>
    <title>PHP file handling</title>
</head>
<body>


<?php
// megnyitás
//fopen(filename,művelet)
$file = fopen("joska.txt", "w");
$text = "beleírjuk ezt a sort";

fwrite($file, $text);
fclose($file);
?>

</body>
</html>