<?php
require_once 'Example.php';

class Demo extends Example
{
    public $age = 22;
    protected $location = "Framgate";
    private $mobile = '01681667139';

    public function newOne() {
        echo 'In new one';
        $this->addition();
    }
    protected function newTwo() {
        echo 'In new two';
    }
    private function newThree() {
        echo 'In new three';
    }
}