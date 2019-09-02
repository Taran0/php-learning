<?php
//db connect fájl betöltése
require_once "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- another version
    <?php
        if(isset($_GET['id'])){
            echo "<h2 class='success'>{$_GET['id']}</h2>";
        }
    ?> 
    -->
    <h2 class="success"><?php echo @$_GET['id']; ?></h2>
    <div class="">
        <fieldset>
            <form action="view-data.php" class="" method="get">
                <input type="text" name="search" placeholder="search by name and ssn">
                <input type="submit" name="searchbutton" value="Search record">
            </form>
        </fieldset>
    </div>
    <?php
        if(isset($_GET['searchbutton'])){
            $connectingDB;
            $search = $_GET['search'];
            $sql = "SELECT * FROM emp_jazeb WHERE ename=:searcH OR ssn=:searcH";
            $stmt = $connectingDB->prepare($sql);
            $stmt->bindValue(':searcH', $search);
            $stmt->execute();
            while($DataRows = $stmt->fetch()){
                $id = $DataRows['id'];
                $ename = $DataRows['ename'];
                $ssn = $DataRows['ssn'];
                $dept = $DataRows['dept'];
                $salary = $DataRows['salary'];
                $address = $DataRows['address'];
                ?>
                <div>
                    <table width="1000" border="5" align="center">
                        <caption>Search result</caption>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>SSN</th>
                            <th>Department</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>Search Again</th>
                        </tr>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $ename; ?></td>
                            <td><?php echo $ssn; ?></td>
                            <td><?php echo $dept; ?></td>
                            <td><?php echo $salary; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><a href="view-data.php">Search again</a></td>
                        </tr>
                    
                    </table>
                </div>
    <?php
            }
        }
    ?>
    <table width="1000" border="5" align="center">
        <caption>View from DB</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>SSN</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
<?php
$connectingDB;
$sql = "SELECT * FROM emp_jazeb";
$stmt = $connectingDB->query($sql);

while($DataRows=$stmt->fetch()){
    $id = $DataRows['id'];
    $ename = $DataRows['ename'];
    $ssn = $DataRows['ssn'];
    $dept = $DataRows['dept'];
    $salary = $DataRows['salary'];
    $address = $DataRows['address'];
?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $ename; ?></td>
        <td><?php echo $ssn; ?></td>
        <td><?php echo $dept; ?></td>
        <td><?php echo $salary; ?></td>
        <td><?php echo $address; ?></td>
        <td><a href="Update.php?id=<?php echo $id; ?>">Update</a></td>
        <td><a href="Delete.php?id=<?php echo $id; ?>">Delete</a></td>
    </tr>
<?php
}
?>
    </table>
    <div class="">

    </div>


</body>
</html>
