<!--
form-név,kor, mail, honlap, tárgyak, password, profilkép, regdate (bekérés global variable + validation)
fv-password titkosít
fv-kor alapján rang if else el
fv-targyakhoz random jegyet rendel
fv-mailküldés
fv-file-ba kiiír az adatokat
fv-random értékek a jegyeknek
cookie create
 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Udemy php/mysql tutorial - php part ultimate practice</title>
</head>
<body>
    <form action="" method="post">
        <b><label>Személyes adatok</label></b>
        <div>
            <label>Név:
                <input type="text" name="name">
            </label>
        </div>
        <div>
            <label>Kor:
                <input type="number" name="age">
            </label>
        </div>
        <div>
            <label>E-mail:
                <input type="text" name="mail">
            </label>
        </div>
        <div>
            <label>Jelszó:
                <input type="password" name="password">
            </label>
        </div>
        <br>
        <div>
            <div>
                <b><label>Jegyek</label></b>
            </div>
            <div>
                <label>Tárgy1:
                    <input type="text" name="subject1">
                </label>
            </div>
            <div>
                <label>Tárgy2:
                    <input type="text" name="subject2">
                </label>
            </div>
            <div>
                <label>Tárgy3:
                    <input type="text" name="subject3">
                </label>
            </div>
            <br>
            <div>
                <label>Profilkép
                    <input type="file" name="image">
                </label>
            </div>
            <br><br>
            <div>
                <label>
                    <input type="submit" name="submit">
                </label>
            </div>
        </div>
    </form>

<h1>php</h1>
<?php
include('functions.php');

//**VARIABLES */
$name = $_POST['name'];
$age = $_POST['age'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$image = $_POST['image'];


//**FUNCTIONS */
// cookie create
setcookie("user", $mail, time()+60*60*24*30);

// fv-kor alapján rang if else 
echo $name . " egy " . titlemaker($age) . "<br>";

// fv- mail ellenőrzés és mailküldés
$mailvalidate = mailcheck($mail);
echo $mailvalidate . "<br>";
echo mailsend($mailvalidate, $mail) . "<br>";

// fv-password titkosít
$passwordEncrypted = psswdEncrypt($password);
echo "jelszó titkosítva, hash: " . $passwordEncrypted . "<br>";


// fv-targyakhoz random jegyet rendel
$note1 = noteGenerate();
$note2 = noteGenerate();
$note3 = noteGenerate();
echo "A" . $subject1 . " tárgyhoz tartozó jegy: " . $note1 . "<br>";
echo "A" . $subject2 . " tárgyhoz tartozó jegy: " . $note2 . "<br>";
echo "A" . $subject3 . " tárgyhoz tartozó jegy: " . $note3 . "<br>";


// passwd file generate
generatePasswd($mail, $passwordEncrypted);
echo "Passwd file generated, open: " . "<a href='passwd.txt'>passwd</a>" . "<br>";

// BUG: regform: képfeltöltés nem jó
// pics upload
picsUpload($image);
echo "<img src/'$image'>";

?>
<br><br>
<a href="profile.php">Profil generálás</a>

</body>
</html>



