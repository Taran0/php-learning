<?php
require_once "db.php";
$actualID = $_GET['id'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $start = $_POST['start'];
    $deadline = $_POST['deadline'];
    $planned_time = $_POST['planned-time'];
    $status = $_POST['status'];

    $connectDB;

$sql = "UPDATE projects SET name='{$name}', project_start='{$start}', deadline='{$deadline}', planned_worktime='{$planned_time}', project_status='{$status}' WHERE id='{$actualID}'";

$execute = $connectDB->query($sql);

}
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
    if($execute){
        echo "<div class='message'>The project updated successfully</div>";
    }
}

$connectDB;

$sql = "SELECT * FROM projects WHERE id='{$actualID}'";

$statement = $connectDB->query($sql);

while($rows = $statement->fetch()){
    $id = $rows['id'];
    $name = $rows['name'];
    $start = $rows['project_start'];
    $deadline = $rows['deadline'];
    $planned_time = $rows['planned_worktime'];
    $status = $rows['project_status'];
}







?>
    <form action="update.php?id=<?php echo $id; ?>" method="post" class="window">
        <div id="form-title">Update project</div>
        <div class="form-group">
            <label>Project name: </label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label>Project start: </label>
            <input type="date" name="start" value="<?php echo date('Y-m-d', strtotime($start)); ?>">
        </div>
        <div class="form-group">
            <label>Deadline: </label>
            <input type="date" name="deadline" value="<?php echo date('Y-m-d', strtotime($deadline)); ?>">
        </div>
        <div class="form-group">
            <label>Planned worktime:</label>
            <input type="time" name="planned-time" value="<?php echo date("H:i", strtotime($planned_time)); ?>">
        </div>
        <div class="form-group">
            <label>Project status:</label>
            <select name="status">
                <option value="active"<?php if($status == 'active'){echo 'selected="selected"';}?>>active</option>
                <option value="paused"<?php if($status == 'paused'){echo 'selected="selected"';}?>>paused</option>
                <option value="planned"<?php if($status == 'planned'){echo 'selected="selected"';}?>>planned</option>
                <option value="completed"<?php if($status == 'completed'){echo 'selected="selected"';}?>>completed</option>
            </select>
            

        </div>
        <div>
            <input type="submit" value="Update" name="submit">
        </div>
    </form>    


</body>
</html>