<?php
//isset - ne írjon hibát ha még nincs megadva semmi
//hanem írj ki hogy login required
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "Taran" && $password == "taran") {
        echo "Welcome on board {$username}!" . "<br>";
    } else {
        echo "Account doesn't exist! Try Again!";
    }
} else {
    echo "<h2>Login Required</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form handling by Jazeb Akram</title>
</head>

<body>
<fieldset>
    <legend>HTML5 Form</legend>
    <form action="post-and-isset.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Send" name="submit">
    </form>
</fieldset>
</body>

</html>
