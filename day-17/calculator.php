<?php
    $result = ' ';
    if(isset($_POST['btn'])) {
    require_once 'FullName.php';
    $fullName = new FullName();
    $result = $fullName->myCalculator($_POST);
}
?>



<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <th><input type="text" name="first_number" value="<?php echo $_POST['first_number']; ?>"></th>
        </tr>
        <tr>
            <th>Second Number</th>
            <th><input type="text" name="second_number" value="<?php echo $_POST['second_number']; ?>"></th>
        </tr>
        <tr>
            <th>Result</th>
            <th><input type="text" value="<?php echo $result; ?>" name="result"></th>
        </tr>
        <tr>
            <th></th>
            <th>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </th>
        </tr>
    </table>
</form>
