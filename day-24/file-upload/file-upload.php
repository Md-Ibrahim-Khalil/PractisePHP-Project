<?php
    $link = mysqli_connect('localhost', 'root', '', 'image_upload');
    echo '<pre>';
    print_r($_POST);
    // print_r($_FILES);
    // echo $_FILES['image_file']['name'];

    
    if (isset($_POST['btn'])) {
        

        $fileName = $_FILES['image_file'] ['name'];
        $directory = 'images/';
        $imageURL = $directory .$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        // echo $fileType;
        $check = getimagesize($_FILES['image_file']['tmp_name']);
        // echo '<pre>';
        // print_r($check);
        if ($check) {
            if(file_exists($imageURL)) {
                die('This file already exist. Please select another one. Thanks');
            } else {
                if($_FILES['image_file']['size'] > 500000) {
                    die('Your image size is too large. Please select with 10kb');
                } else {
                    if($fileType != 'JPG' && $fileType  != 'png' && $fileType  != 'jpg') {
                        die('Image type is not supported. Please use jpg or png');
                    } else {
                        move_uploaded_file($_FILES['image_file']['tmp_name'], $imageURL);
                        $sql = "INSERT INTO images (image_file) VALUES ('$imageURL')";
                        mysqli_query($link,$sql);
                        echo 'Image Upload & save successfully';
                    }
                }
            }
        } else {
            die('Please choose a image file thanks!.');
        }

       




    }




// 1.40.50 minutes url =>https://github.com/ratulrashedujjaman/day-24/blob/master/Blog/admin/manage-blog.php
// http://localhost/PractisePHP-Project/day-24/file-upload/file-upload.php



    // $data = [];
    // $data ['image_file'] ['name'];
    // $data ['image_file'] ['type'];
    // $data ['image_file'] ['tmp_name'];
    // $data ['image_file'] ['error'];
    // $data ['image_file'] ['size'];


    // $data = [
    //     'image_file' => Array (
    //         'name' => '',
    //         'type' => '',
    //         'tmp_name' => '',
    //         'error' => '',
    //         'size' => ''
    //     ),
    // ];
            

    
    

?>


<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select File</th>
            <td><input type="file" name="image_file" /></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"/></td>
        </tr>
    </table>
</form>

<hr/>


<?php 
    $sql = "SELECT * FROM images";
    $queryResult = mysqli_query($link, $sql);
?>


<table>
    <?php while ($image = mysqli_fetch_assoc($queryResult)) { ?>
    <tr>
        <td><img src="<?php echo $image['image_file']; ?>" alt="" height="100" width="100" /></td>
    </tr>
    <?php } ?>
</table>