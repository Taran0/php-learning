<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
<?php
$Name = "Alex";
$Position = "Support Coordinator & Manager";

?>
<a href="File2.php?Name=<?php echo $Name; ?>">Click</a> 

<!-- nem férsz hozzá a file2-ben a positon-höz mert a tartalmában a & jel miatt,
két külön változónak veszi, ráadásul key-nek -->
<a href="File2.php?Name=<?php echo $Name; ?> & Position=<?php echo $Position ?>">Click2</a>

<!-- így már jó lesz, raw kell ha a változóban ezek vannak: & < > "-->
<a href="File2.php?Name=<?php echo $Name; ?> & Position=<?php echo rawurlencode($Position) ?>">Click3</a>


</body>
</html>