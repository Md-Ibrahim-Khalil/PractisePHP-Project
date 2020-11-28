<?php

    require_once 'vendor/autoload.php';

    use App\classes\Example;
    use App\classes\Student;
    Student::addition();


    if(isset($_POST['btn'])){
        $example = new App\classes\Example();
        $result = $example::wordCharacterCount($_POST);   // :: (Scope resulation operator)
    }
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Enter Your String</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>

        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" name="total_word" value="<?php echo $result['word_length']; ?>"></td>
        </tr>

        <tr>
            <th>Total Number of Character</th>
            <td><input type="text" name="total_character" value="<?php echo $result['string_length']; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>

    </table>
</form>
