<!DOCTYPE html>
<html>
<head>
    <title>GET and POST method</title>
</head>
<body>
<form action="get-post-method.php" method="post">
Username: <input type="text" name="username">
Email: <input type="text" name="email">
<input type="submit" name="submit" value="Küldés">
</form>

<?php
echo $_POST['username'] . "<br>";
echo $_POST['email'] . "<br>";
?>

</body>
</html>