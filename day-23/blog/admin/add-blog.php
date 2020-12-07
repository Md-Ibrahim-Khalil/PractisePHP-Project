<?php

session_Start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();

if (isset($_GET['logout'])) {
    $login->adminLogout();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->
</head>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select name="category_name" class="from-control">
                                        <option>---Select Category Name---</option>
                                        <option value="1">Category One</option>
                                        <option value="2">Category Two</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_title" class="from-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form_control" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form_control" name="long_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="blog_image" accept="image/*" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="status" value="1"> Published
                                    <input type="radio" name="status" value="0"> Unpublished
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="co-sm-3"></div>
                                <div class="col-sm-9">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
                                </div>
                            </div>
                        </form>
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