<?php


namespace App\classes;


class Student
{
    public function saveStudentInfo($data){


//        echo '<pre>';
//        print_r($data);

        $link = mysqli_connect('localhost', 'root', '', 'bitm');

        $sql = "INSERT INTO students (name, email, mobile) values('$data[name]', '$data[email]', '$data[mobile]')";

        if (mysqli_query($link, $sql)){
            $message = "Student info save successfully";
            return $message;

        } else {
            die('Query problem'.mysqli_error($link));
        }
    }
    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'bitm'); //connection establish
        $sql = "SELECT * FROM students"; // write query

        if (mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;


//            echo '<pr>';
//            print_r($queryResult);

        } else {
            die('Query problem'.mysqli_error($link));
        }

    }
}