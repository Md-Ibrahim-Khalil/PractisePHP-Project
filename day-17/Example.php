<?php


class Example
{
    public $name ='Mosiur Rahman';
    protected $city ='Dhaka';
    private $country ='Bangladesh';
    public $value;

//    public function __construct($data) {
////        echo 'in construct';
//    }

    public function __construct() {

    }


    public function addition(){
       echo 'in addition';
    }
    protected function subtraction(){
        echo $this->value;
    }
    protected function division(){
        echo 'In division';
    }



}