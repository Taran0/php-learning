<!DOCTYPE html>
<!-- itt indítjuk el a session-t -->
<?php
session_start();

?>
<html>
<head>
    <title>Sessions</title>
</head>
<body>
<form action="sessions.php" method="post">
Username: <input type="text" name="username">
<!-- value: amit alul eltárolt a session globális változóban azt az értéket 
megadjuk alapból a form mezőjének, és kiirja (azonosítva ezzel a usert)-->
Email: <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>">
<input type="submit" name="submit" value="Küldés">
</form>


<?php
//eltárolja a session-t (később ehhez rendelünk hozzá mindenféle infót?) + ki is iratunk egy üzit,
//üdvözölve az azonosított user-t
$user_mail = $_POST['email'];
$_SESSION['email'] = $user_mail;
echo "welcome to my website!" . $_SESSION['email'];
?>

</body>
</html>