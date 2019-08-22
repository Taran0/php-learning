<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

//**FORM VALIDATION */
$submit = $_POST['submit'];
if (isset($_POST['submit'])) {
    echo "Succesful login." . "<br>";
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    echo "Welcome {$username}!" . "<br>";
} else {
    echo "no username detected" . "<br>";
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    echo "password is set!" . "<br>";
} else {
    echo "no password detected" . "<br>";
}


/*V1 (OLD)
$username = $_POST['username'];
$password = $_POST['password'];

$submit = $_POST['submit'];
if (isset($_POST['submit'])) {
    echo "Succesful login." . "<br>";
}

if (isset($username) && !empty($username)) {
    echo "Welcome {$username}!" . "<br>";
} else {
    echo "no username detected" . "<br>";
}

if (isset($password) && !empty($password)) {
    echo "password is set!" . "<br>";
} else {
    echo "no password detected" . "<br>";
}
*/
