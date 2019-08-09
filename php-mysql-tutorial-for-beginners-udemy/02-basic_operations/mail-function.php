<!DOCTYPE html>
<html>
<head>
    <title>PHP mails</title>
</head>
<body>


<?php
//**EMAIL PARAMETERS */
// 1. reciever email - cimzett
// 2. subject 
// 3. message
// 4. sender email
$to = "masikna@gmail.com";
$subject = "tárgya";
$message = "Szia Bogyóka!";
$sender = "farkasxbalazs@gmail.com";

//mail elküldése
//localhost-on nem műxik
mail($to,$subject,$message,$sender);
?>

</body>
</html>