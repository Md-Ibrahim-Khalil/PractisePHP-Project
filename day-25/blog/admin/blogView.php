<?php
$message = '';
session_start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();
$blog = new App\classes\Blog();


if (isset($_GET['logout'])) {
    $login->adminLogout();
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $message = $blog->deleteBlogInfo($id);
}
$id = $_GET['id'];
$queryResult = $blog->viewBlogInfo($id);
$blogInfo = mysqli_fetch_assoc($queryResult);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <?php include 'includes/menu.php'; ?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Blog Id</th>
                                <th><?php echo $blogInfo['id']; ?></th>
                            </tr>
                            <tr>
                                <th>Blog Title</th>
                                <th><?php echo $blogInfo['blog_title']; ?></th>
                            </tr>
                            <tr>
                                <th>Category ID</th>
                                <th><?php echo $blogInfo['category_id']; ?></th>
                            </tr>
                            <tr>
                                <th>Blog Short Description</th>
                                <th><?php echo $blogInfo['short_description']; ?></th>
                            </tr>
                            <tr>
                                <th>Blog Long Description</th>
                                <th><?php echo $blogInfo['long_description']; ?></th>
                            </tr>
                            <tr>
                                <th>Blog Image</th>
                                <th><img src="<?php echo $blogInfo['blog_image']; ?>" height="200" width="250" /></th>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <th><?php echo $blogInfo['status'] == 1 ? 'Published' : 'Unpublished' ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- <script src="../assests/js/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="../assests/js/bootstrap.bundle.js"></script>
    <script src="../assests/js/bootstrap.min.js"></script> -->
</body>

</html>