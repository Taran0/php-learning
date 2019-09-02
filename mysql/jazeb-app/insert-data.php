<?php
//db connect fájl betöltése
require_once "db.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['ename']) && !empty($_POST['ssn']) && !empty($_POST['dept']) && !empty($_POST['salary']) && !empty($_POST['address'])) {
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
        $sql = "INSERT INTO emp_jazeb(ename, ssn, dept, salary, address)
        VALUES(:enamE, :ssN, :depT, :salarY, :addresS)";

        //connectingDB objekt, metódusa a prepare
        $stmt = $connectingDB->prepare($sql);

        //pdo-s value párosítása a változókkal
        $stmt->bindValue(':enamE', $ename);
        $stmt->bindValue(':ssN', $ssn);
        $stmt->bindValue(':depT', $dept);
        $stmt->bindValue(':salarY', $salary);
        $stmt->bindValue(':addresS', $address);

        $execute = $stmt->execute();

        if($execute){
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
    <title>Insert data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="">
        <form action="insert-data.php" method="post">
        <fieldset>
            <span class="fieldinfo">Emloyee name:</span><br>
            <input type="text" name="ename" value="">
            <br>
            <span class="fieldinfo">Social security number:</span><br>
            <input type="text" name="ssn" value="">
            <br>
            <span class="fieldinfo">Department:</span><br>
            <input type="text" name="dept" value="">
            <br>
            <span class="fieldinfo">Salary:</span><br>
            <input type="text" name="salary" value="">
            <br>
            <span class="fieldinfo">Address:</span><br>
            <textarea name="address" id="" cols="80" rows="8"></textarea>
            <br>
            <input type="submit" name="submit" value="submit your form">
        </fieldset>
        </form>
    </div>


</body>
</html>
