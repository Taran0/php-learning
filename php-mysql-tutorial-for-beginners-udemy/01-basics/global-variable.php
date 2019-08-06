<!DOCTYPE html>
<html>
<head>
    <title>Global variable</title>
</head>
<body>
    <form action="" method="get">
        Name: <input type="text" name="username">
        <input type="submit" value="send">
</form>

<?php
echo $_SERVER['REMOTE_ADDR'];
?>

</body>
</html>