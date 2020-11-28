<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <title>CRUD Operation</title>
</head>
<body >

    <?php require_once 'process.php'; ?>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>

    <div class="bg-light row">
        <div class="container-fluid col-sm">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">SECTION</th>
                        <th scope="col">ACTIVITY</th>
                        <th scope="col">MODIFY</th>
                    </tr>
                </thead>
                <tbody>

                
                <?php

                    // Read data
                    $result = mysqli_query($link,"SELECT * FROM record");
                    if (mysqli_num_rows($result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["record_id"]; ?></td>
                        <td><?php echo $row["Name"]; ?></td>
                        <td><?php echo $row["Activity"]; ?></td>
                        <td><a class="btn btn-danger" href="process.php?delete=<?php echo $row["record_id"];?>"> Delete </a> </td>
                        <td><a class="btn btn-success" href="index.php?edit=<?php echo $row["record_id"];?>">Update</a></td>
                    </tr>
                </tbody>

                <?php
                        $i++;
                        }
                    }
                ?>
            </table>
        </div> 

        <div class="container col align-self-center d-flex justify-content-center">
            
            <form method="POST" action="process.php" class="info_form">

                <input type="hidden" name="id"  value="<?php echo $record_id; ?>">
            
                <h2 style="font-family:'Candara'" class="text-center ">Bangali Gallery</h2>

                <img src="logo.png" width="65" height="65" class="py-1 rounded mx-auto d-block" alt="Bangali Gallery Logo">

                <div class="form-group">
                    <label for="name">Enter Section</label>
                    <input type="text" class="form-control" name="section" value="<?php echo $section; ?>" placeholder="Section">
                </div>

                <div class="form-group"> 
                    <label for="phone">Activity</label>
                    <input type="text" class="form-control" name="activity" value="<?php echo $activity; ?>" placeholder="Activity">
                </div>
                
                <?php if($update == true): ?>
                    <div class="text-center">
                        <button type="submit" name="update" value="update" class="bg-light rounded-pill border border-success">Update</button>
                    </div>
                
                <?php else: ?>
                
                    <div class="text-center">
                        <button type="submit" name="submit" value="Submit" class="bg-light rounded-pill border border-info">Submit</button>
                    </div>
                <?php endif;?>
            
            </form>
            
            
        </div>

    </div>

</body>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>