<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<br>";

$Name = $_GET['Name'];
echo $Name;
?>
</body>
</html>