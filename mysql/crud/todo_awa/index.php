<?php
require_once "db.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['task'])) {
        $task = $_POST['task'];

        $connectingDB;

        //pdo használata: sql injection prevent
        //id auto rakja bele
        //insert into: neveknek ugyanannak kell lenni amit mysql-ben adtál az mezőknek
        //values: bármit használhatsz csak később ua legyen a bindValue-ban is
        $sql = "INSERT INTO todo(task)
        VALUES(:task)";

        //connectingDB objekt, metódusa a prepare
        $stmt = $connectingDB->prepare($sql);

        //pdo-s value párosítása a változókkal
        $stmt->bindValue(':task', $task);

        $execute = $stmt->execute();

        if ($execute) {
            echo "<span class='success'>Record has been added successfully</span>";
        }

    } else {
        echo "<span class='fieldinfoheading'>please add the data</span>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="heading">
        <h2>Todo List</h2>

    </div>
    <form method="POST" action="index.php">
        <input type="text" name="task" class="task-input">
        <button type="submit" name="submit" class="task-btn">Add task</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>N</th>
                <th>Task</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
<?php
$connectingDB;
$sql = "SELECT * FROM todo";
$stmt = $connectingDB->query($sql);

while ($DataRows = $stmt->fetch()) {
    $id = $DataRows['id'];
    $task = $DataRows['task'];
    ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $task; ?></td>
        <!-- <td><a href="Delete.php?id=<?php echo $id; ?>">Delete</a></td> -->
        <td class="delete"><a href="#">x</a></td>
    </tr>
<?php
}
?>
        </tbody>
    </table>

</body>

</html>
