<?php


namespace App\classes;


class Database
{
    public function dbConnection(){
        $hostname = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "blog";
        $link = mysqli_connect($hostname, $userName, $password, $dbName);
        return $link;
        
    }
}