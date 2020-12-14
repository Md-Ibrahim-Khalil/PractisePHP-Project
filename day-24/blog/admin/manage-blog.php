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

$queryResult = $blog->viewBlogInfo();
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
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">SL NO</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Blog Title</th>
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Long Description</th>
                                    <th scope="col">Blog Image</th>
                                    <th scope="col">Publication Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_assoc($queryResult)) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $data['id'] ?></th>
                                        <td><?php echo $data['category_name'] ?></td>
                                        <td><?php echo $data['blog_title'] ?></td>
                                        <td><?php echo $data['short_description'] ?></td>
                                        <td><?php echo $data['long_description'] ?></td>
                                        <td><?php echo $data['blog_image'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
                                        <td>
                                            <a href="blogEdit.php?id=<?php echo $data['id'] ?>">Edit</a>
                                            <a href="?delete=true&id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure delete this !!');">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
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