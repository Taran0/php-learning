<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';
require_once 'includes/sessions.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $admin = "Taran";

    date_default_timezone_set("Europe/Budapes");
    $CurrentTime = time();
    $DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

    if(empty($_POST['title'])){
        $_SESSION['ErrorMessage'] = "All field must be filled out!";
        redirect_to("categories.php");
    } elseif (strlen($title) < 3) {
        $_SESSION['ErrorMessage'] = "Category title should be at least 2 character long";
        redirect_to("categories.php");
    } elseif (strlen($title) > 49) {
        $_SESSION['ErrorMessage'] = "Category title should be under 50 character long";
        redirect_to("categories.php");
    } else {
        //query to insert category in db when everything is fine
        $sql = "INSERT INTO category(title, author, created)";
        $sql .= "VALUES(:catname, :adminname, :datetime)";

        $stmt = $connectingDB->prepare($sql);

        $stmt->bindValue(":catname", $title);
        $stmt->bindValue(":adminname", $admin);
        $stmt->bindValue(":datetime", $DateTime);

        if($stmt->execute()){
            $_SESSION['SuccessMessage'] = "Category was created successfully";
            redirect_to("categories.php");
        } else {
            $_SESSION['ErrorMessage'] = "Something went wrong. Try again!";
            redirect_to("categories.php");
        }
    }
}
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
    <link rel="stylesheet" href="css/styles.css">
    <title>Categories</title>
</head>

<body>
    <!-- navbar -->
    <div style="height: 10px; background:#27aae1;"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">taran.com</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarcollapseCMS">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="myprofile.php" class="nav-link"><i
                                class="fas fa-user text-success"></i> My Profile</a></li>
                    <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link">Posts</a></li>
                    <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="admins.php" class="nav-link">Manage Admins</a></li>
                    <li class="nav-item"><a href="comments.php" class="nav-link">Comments</a></li>
                    <li class="nav-item"><a href="blog.php?page=1" class="nav-link">Live Blog</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="logout.php" class="nav-link text-danger"><i
                                class="fas fa-user-times"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 10px; background:#27aae1;"></div>
    <!-- navbar end -->

    <!-- header -->
    <header class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-edit" style="color:#27aae1"></i>Manage Categories</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- main area -->
    <section class="container py-2 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10" style="min-height:400px;">
            <?php
                echo ErrorMessage();
                echo SuccessMessage();
            ?>
                <form action="categories.php" method="post">
                    <div class="card bg-secondary text-light mb-3">
                        <div class="card-header">
                            <h1>Add new Category</h1>
                        </div>
                        <div class="card-body bg-dark">
                            <div class="form-group">
                                <label for="title"><span class="fieldInfo">Category Title: </span></label>
                                <input class="form-control" type="text" name="title" id="title" value="">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <a href="dashboard.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>Back to Dashboard</a>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <button type="submit" name="submit" class="btn btn-success btn-block">
                                        <i class="fas fa-check"></i> Publish
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end main area -->
    <!-- footer -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <!-- mind a 12 column használata -->
                <div class="col">
                    <p class="lead text-center">Theme by | Taran | <span id="year"></span> &copy; ---All right reserved</p>
                    <p class="lead text-center small">This is the otherSite, where places the truth.</p>
                </div>
            </div>
        </div>
    </footer>
    <div style="height: 10px; background:#27aae1;"></div>
    <!-- footer end -->


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
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>
