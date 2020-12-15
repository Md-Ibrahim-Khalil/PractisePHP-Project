<?php
$message = '';
session_start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once '../vendor/autoload.php';

$login = new App\classes\Login();
$category = new App\classes\Category();

if (isset($_GET['logout'])) {
    $login->adminLogout();
}
$id = $_GET['id'];

$queryResult = $category->getCategoryInfo($id);

$data = mysqli_fetch_assoc($queryResult);

if (isset($_POST['btn'])) {
    $category->editCategoryInfo($_POST);
}


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
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <h4 class="text-success"><?php echo $message; ?></h4>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name" value="<?php echo $data['category_name'] ?>">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="category_description"><?php echo $data['category_description'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="status" value="1" <?php if ($data['status'] == "1") echo 'checked'; ?>> Published
                                    <input type="radio" name="status" value="0" <?php if ($data['status'] == "0") echo 'checked'; ?>> Unpublished
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Update Category Info</button>
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