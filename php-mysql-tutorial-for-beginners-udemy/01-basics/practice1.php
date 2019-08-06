<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice 1</title>
</head>
<body>
    <h1>Practice 1</h1>
    <span>gyakorlott anyagok:</span>
    <ul>
        <li>basics</li>
        <li>local variables</li>
        <li>globale variables</li>
    </ul>

    <h2>Form</h2>
    <form action="" method="post">
        <div>
            <label>Név: 
            <input type="text" name="username">
            </label>
        </div>

        <div>
            <label>Kor: 
            <input type="number" name="age">
            </label>
        </div>

        <div>
            <label>Családi állapot:
            <input type="text" name="family">
            </label>
        </div>

        <div>
            <input type="submit" value="Send the data">
        </div>
    <form>

    <p>PHP kiértékelése</p>

    <?php
        $nev = $_POST['username'];
        $kor = $_POST['age'];
        $csAll = $_POST['family'];

        echo 
        "neve: " . $nev . "<br>" .
        "kora: " . $kor . "<br>" .
        "családi állapota: " . $csAll . "<br>" .
        "kora kutyaévben: " . $kor/6
        ;
    ?>
</body>
</html>
