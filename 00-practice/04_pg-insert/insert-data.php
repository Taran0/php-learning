<?php
require_once "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/214f271038.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<!-- navbar -->
<nav id="main-nav" class="navbar navbar-expand-sm navbar-dark bg-dark py-4">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="img/logo.png" alt="">
                <p class="d-inline mb-2">ProjectMaster</p>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Active</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">PHP</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Planned</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Archived</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">

<i>
    <?php
try {
    $dbconn = new PDO($dsn, $username, $password);
    echo "connection was successful!";

} catch (PDO_Excepiton $e) {
    echo "CONNECTION FAILED!!!";
    echo $e->getMessage();
}
?>
    </i>

    <?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {
        echo "jóóóóóóóóskagyerek" . $_POST['name'];
        $projectName = $_POST['name'];

        $connection;

        $sql = "INSERT INTO proba(name)
                VALUES(:pname)";

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(':pname', $projectName);

        $execute = $stmt->execute();

        if ($execute) {
            echo "<span>Record has been added successfully</span>";
        }

    } else {
        echo "<span>please add the data</span>";
        echo $projectName;
    }
}
?>

    <form action="insert-data.php" method="post">
        Name: <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
</div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        //get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>
</html>