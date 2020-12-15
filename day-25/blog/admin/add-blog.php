<?php
$message = '';
session_start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();
$blog = new App\classes\Blog();


$queryResult = $blog->getAllPublishedCategoryInfo();

if (isset($_GET['logout'])) {
    $login->adminLogout();
}

if (isset($_POST['btn'])) {
    $message = $blog->addBlog($_POST);
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
            <div class="col-sm-10 mx-auto">
                <div class="card">
                    <h4 class="text-success"><?php echo $message; ?></h4>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select name="category_id" class="form-control">
                                        <option>---Select Category Name---</option>
                                        <?php while ($category = mysqli_fetch_assoc($queryResult)) { ?>
                                            <option value="<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_title" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control textarea" name="long_description" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" value="hi" name="blog_image" accept="image/*" />
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
                                <div class="col-sm-3"></div>
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
















    <script src="https://cdn.tiny.cloud/1/f584yck07h1hh3dp79zjgdkf9sxjgsqv62nlogzjnh1li381/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>

</html>