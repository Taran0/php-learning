<?php
// fv-kor alapján rang if else el
function titlemaker($age)
{
    if ($age < 16) {
        return "gyerek";
    } else if ($age <= 18) {
        return "kamasz";
    } else if ($age < 60) {
        return "felnőtt";
    } else {
        return "öreg";
    }
}

function mailcheck($mail)
{
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return "e-mail is valid";
    } else {
        return "invalid e-mail";
    }
}

// fv- mail ellenőrzés és mailküldés
function mailsend($mailvalidate, $mail)
{
    // if ($mailvalidate == true) {
    //     $to = "anyád@gmail.com";
    //     $subject = "tárgy";
    //     $message = "lófasz a picsádba";
    //     $sender = "en@gmail.com";

    //     mail($to, $subject, $message, $sender);
    // }

    return "Az email elküldve.";
}

// fv-password titkosít
function psswdEncrypt($password)
{
    $crypted = md5($password);
    return $crypted;
}

// fv-targyakhoz random jegyet rendel
function noteGenerate()
{
    $gen_num = rand(1, 5);
    return $gen_num;
}

// passwd file generate
function generatePasswd($mail, $passwordEncrypted)
{
    fwrite(fopen('passwd.txt', 'w'), $mail . " " . $passwordEncrypted);
}

// pics upload
function picsUpload($image)
{
    if (isset($image)) {
        //files[name of input][fájlnév kiirása]
        $kep = $_FILES['image']['name'];
        //több fájlt képet akarsz feltölteni - ez a temporary
        $kep_tmp = $_FILES['image']['tmp_name'];

        //mentés helye
        move_uploaded_file($image_tmp, "images/$kep");
        echo "<img src='images/$kep'>";
    }
}
