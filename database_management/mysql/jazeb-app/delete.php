<?php
//db connect fájl betöltése
require_once "db.php";
$searchQueryParam = $_GET['id'];

if (isset($_POST['submit'])) {
    $ename = $_POST['ename'];
    $ssn = $_POST['ssn'];
    $dept = $_POST['dept'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];

    $connectingDB;

    //pdo használata: sql injection prevent
    //id auto rakja bele
    //insert into: neveknek ugyanannak kell lenni amit mysql-ben adtál az mezőknek
    //values: bármit használhatsz csak később ua legyen a bindValue-ban is
    $sql = "DELETE FROM emp_jazeb WHERE id='$searchQueryParam'";
    $execute = $connectingDB->query($sql);

    if ($execute) {
        //self - nem nyit új tabot
        echo "<script>window.open('view-data.php?id=Record Deleted Successfully', '_self')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$connectingDB;
$sql = "SELECT * FROM emp_jazeb WHERE id={$searchQueryParam}";
$stmt = $connectingDB->query($sql);
while ($DataRows = $stmt->fetch()) {
    $id = $DataRows['id'];
    $ename = $DataRows['ename'];
    $ssn = $DataRows['ssn'];
    $dept = $DataRows['dept'];
    $salary = $DataRows['salary'];
    $address = $DataRows['address'];
}

?>
    <div class="">
        <form action="delete.php?id=<?php echo $searchQueryParam; ?>" method="post">
        <fieldset>
            <span class="fieldinfo">Emloyee name:</span><br>
            <input type="text" name="ename" value="<?php echo $ename; ?>">
            <br>
            <span class="fieldinfo">Social security number:</span><br>
            <input type="text" name="ssn" value="<?php echo $ssn; ?>">
            <br>
            <span class="fieldinfo">Department:</span><br>
            <input type="text" name="dept" value="<?php echo $dept; ?>">
            <br>
            <span class="fieldinfo">Salary:</span><br>
            <input type="text" name="salary" value="<?php echo $salary; ?>">
            <br>
            <span class="fieldinfo">Address:</span><br>
            <textarea name="address" id="" cols="80" rows="8"><?php echo $address; ?></textarea>
            <br>
            <input type="submit" name="submit" value="delete record">
        </fieldset>
        </form>
    </div>


</body>
</html>
