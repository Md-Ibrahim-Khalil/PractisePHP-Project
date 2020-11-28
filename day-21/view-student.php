<?php
require_once 'vendor/autoload.php';
use App\classes\Student;


$message = '';

$queryResult = Student::getAllStudentInfo();


?>

<hr/>
<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>
<h1 style="color:green;"><?php  echo $message; ?></h1>
<hr/>
<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php while($student = mysqli_fetch_assoc($queryResult) ){ ?>
    <tr>
        <td><?php echo $student['id']; ?></td>
        <td contenteditable="true"><?php echo $student['name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['mobile']; ?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $student['id']; ?>">Edit</a>    
            <a href="">Delete</a>
        </td>
    </tr>
    <?php  } ?>
</table>
