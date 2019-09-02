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
if($_GET['status'] == 'del'){
        echo "<div class='message'>The project was deleted successfully</div>";
}

if($_GET['status'] == 'add'){
    echo "<div class='message'>New project is added successfully</div>";
}

?>
    <table border="1" align="center" id="table-content">
        <tr>
            <th>Name</th>
            <th>Start</th>
            <th>Deadline</th>
            <th>Planned worktime</th>
            <th>Real worktime</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        $connectDB;        
        
        if(empty($_GET['status'])){
            $actualStatusQuery = "active";
        } else {
            $actualStatusQuery = $_GET['status'];
        }
        
        switch($actualStatusQuery){
            case 'all':
                $sql = "SELECT * FROM projects";
                break;
            case "active":
                $sql = "SELECT * FROM projects WHERE project_status = 'active'";
                break;
            case "paused":
                $sql = "SELECT * FROM projects WHERE project_status = 'paused'";
                break;
            case "planned":
                $sql = "SELECT * FROM projects WHERE project_status = 'planned'";
                break;
            case "completed":
                $sql = "SELECT * FROM projects WHERE project_status = 'completed'";
                break;
            case "del":
                $sql = "SELECT * FROM projects";
                break;
            default:
                $sql = "SELECT * FROM projects";
        }

        $statement = $connectDB->query($sql);

        while($rows=$statement->fetch()){
            $id = $rows['id'];
            $name = $rows['name'];
            $start = $rows['project_start'];
            $deadline = $rows['deadline'];
            $planTime = $rows['planned_worktime'];
            $realTime= $rows['real_worktime'];
            $status = $rows['project_status'];
        ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo date('Y. m. d.', strtotime($start)); ?></td>
            <td><?php echo date('Y. m. d.', strtotime($deadline)); ?></td>
            <td><?php echo date('H:i', strtotime($planTime)); ?></td>
            <td><?php echo date('H:i', strtotime($realTime)); ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo "<a href=update.php?id={$id}>update</a>" ?></td>
            <td><?php echo "<a href=delete.php?id={$id}>delete</a>" ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>