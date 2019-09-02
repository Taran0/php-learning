<!DOCTYPE html>
<html lang="en">
<head>
    <title>url-encoding</title>
</head>
<body>
<?php
$web = "Google pakistan";
$search = "Jazeb Akram Online Courses & Website";

//search előtt raw utána sima
$result = "https://" . rawurlencode($web) . "?Search=" . urlencode($search);
echo $result . "<br>";

?>
    
</body>
</html>