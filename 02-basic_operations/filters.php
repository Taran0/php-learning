<!DOCTYPE html>
<html>
<head>
    <title>PHP filters</title>
</head>
<body>
<form action="filters.php" method="post">
Username: <input type="text" name="username">
Email: <input type="text" name="email">
Url: <input type="text" name="url">
<input type="submit" name="submit" value="Küldés">
</form>

<?php
// validating/checking the data
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email is valid.<br>";
    }else{
        echo "Email is invalid, please check it again<br>";
    }
}

//url checking
if(isset($_POST['submit'])){
    $url = $_POST['url'];
    if(filter_var($url, FILTER_VALIDATE_URL)){
        echo "URL is valid.";
    }else{
        echo "URL is invalid, please check it again";
    }
}
?>

</body>
</html>