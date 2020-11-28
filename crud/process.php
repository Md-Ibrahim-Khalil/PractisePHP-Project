<?php 

    session_start();

    define('SERVER', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'bangali_gallery');

    $link = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

    if ($link == false){
        die("ERROR: Could not connect. " .mysql_error());
    }


    
    $update = false;
    $record_id = 0;
    $section = '';
    $activity = '';

    
    if(isset($_POST["submit"]) && !empty($_POST['submit'])){
        $section = mysqli_real_escape_string($link, $_REQUEST['section']);
        $activity = mysqli_real_escape_string($link, $_REQUEST['activity']);

        // Create Data
        $sql = "INSERT INTO record (Name, Activity) VALUES ('$section', '$activity')";

        mysqli_query($link, $sql) or die(mysqli_error($link));

        $_SESSION['message'] = "Information Saved";
        header("location: index.php");
    }

    if(isset($_GET["delete"])){
        $record_id = $_GET["delete"];
        
        // Delete Data
        $sql = "DELETE FROM record WHERE record_id='$record_id'";

        if(mysqli_query($link, $sql)){
            echo "Records Deleted successfully.";
          } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
        header("location: index.php");
    }

    if(isset($_GET["edit"])){
        $record_id = $_GET["edit"];
        $update = true;
        
        // Delete Data
        $result = mysqli_query($link, "SELECT * FROM record WHERE record_id='$record_id'");

        //var_dump($result);
        //$val = mysqli_num_rows($result);
        //echo $val;
        
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
             
            $section = $row["Name"];
            $activity = $row["Activity"];
            
        }         
    }

    if(isset($_POST["update"])){

        echo "I am here";
        $record_id = $_POST['id'];
        $section = $_POST['section'];
        $activity = $_POST['activity'];
        echo $section. " " .$activity;

        $sql = "UPDATE record SET Name='$section', Activity='$activity' WHERE record_id=$record_id";

        
        mysqli_query($link, $sql) or die(mysqli_error($link));
        header("location: index.php");

    }

?>