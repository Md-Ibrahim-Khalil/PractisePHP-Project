<?php


class Demo
{
    public function demo() {
        if(isset($_POST['btn'])){
            $first = $_POST['first_number'];
            $last = $_POST['last_number'];
            $choice = $_POST['check'];
            $res="";

            if($first<$last){
                for($i=$first; $i<=$last; $i++){
                    if($i%2!==0 && $choice=="odd"){
                        $res.=$i." ";
                    }
                    if($i%2==0 && $choice=="Even"){
                        $res.=$i." ";
                    }
                }
                return $res;
            }

        }
    }
}