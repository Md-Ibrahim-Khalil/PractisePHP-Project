<?php


namespace App\classes;


class Student
{

    private function dbConnection() {
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'bitm';
        $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }


    public function saveStudentInfo($data){

        $sql = "INSERT INTO students (name, email, mobile) values('$data[name]', '$data[email]', '$data[mobile]')";
        if (mysqli_query(Student::dbConnection(), $sql)) {
            $message = "Student info save successfully";
            return $message;

        } else {
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }
    }
    public function getAllStudentInfo(){
        $sql = "SELECT * FROM students"; 
        if (mysqli_query(Student::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Student::dbConnection(), $sql);
            return $queryResult;

        } else {
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }

    }
    public function getStudentInfoById($id) {
        $sql = "SELECT * FROM students WhERE id = '$id' ";
        if (mysqli_query(Student::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Student::dbConnection(), $sql);
            echo '<pre>';
            print_r($queryResult);

        } else {
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }
    }
}