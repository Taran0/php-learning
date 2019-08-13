<!DOCTYPE html>
<html>
<head>
    <title>image upload</title>
</head>
<body>
<form action="image_file.php" method="post" enctype="multipart/form-data">
Upload images: <input type="file" name="image">
<input type="submit" name="upload" value="Upload file">
</form>

<?php
if(isset($_POST['upload'])){
    //files[name of input][fájlnév kiirása]
    $image = $_FILES['image']['name'];
    //több fájlt képet akarsz feltölteni - ez a temporary
    $image_tmp = $_FILES['image']['tmp_name'];

    //mentés helye
    move_uploaded_file($image_tmp, "images/$image");
    echo "<img src='images/$image'>";
}
?>

</body>
</html>