<?php
require_once "db.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Projects</title>
</head>
<body>
    <nav id="menu">
        <ul>
            <li><a href="start.php?status=all">All projects</a></li>
            <li><a href="start.php?status=active">Active projects</a></li>
            <li><a href="start.php?status=paused">Paused projects</a></li>
            <li><a href="start.php?status=planned">Planned projects</a></li>
            <li><a href="start.php?status=completed">Completed projects</a></li>
            <li><a href="add-new-project.php">Add new project</a></li>
        </ul>
    </nav>
    <br>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $start = $_POST['start'];
    $deadline = $_POST['deadline'];
    $planned_time = $_POST['planned-time'];
    $status = $_POST['status'];

    $connectDB;

    $sql = "INSERT INTO projects(name, project_start, deadline, planned_worktime, project_status)
    VALUES(:nAme, :stArt, :dliNE, :pWtime, :pStatu)";

    $statement = $connectDB->prepare($sql);

    $statement->bindValue(':nAme', $name);
    $statement->bindValue(':stArt', $start);
    $statement->bindValue(':dliNE', $deadline);
    $statement->bindValue(':pWtime', $planned_time);
    $statement->bindValue(':pStatu', $status);

    $exec = $statement->execute();

    if($exec){
        echo "<script>window.open('start.php?status=add', '_self')</script>";
    }else{
        echo "<div class='message'>Failed to add the new project.</div>";
    }

}
?>
    <form action="add-new-project.php" method="post" class="window">
        <div id="form-title">Add new project</div>
        <div class="form-group">
            <label>Project name: </label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label>Project start: </label>
            <input type="date" name="start">
        </div>
        <div class="form-group">
            <label>Deadline: </label>
            <input type="date" name="deadline">
        </div>
        <div class="form-group">
            <label>Planned worktime:</label>
            <input type="time" name="planned-time">
        </div>
        <div class="form-group">
            <label>Project status:</label>
            <select name="status">
                <option value="active">active</option>
                <option value="paused">paused</option>
                <option value="planned">planned</option>
                <option value="completed">completed</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Create" name="submit">
        </div>
    </form>    


</body>
</html>