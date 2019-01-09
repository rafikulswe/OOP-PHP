<?php
    class MainController{
        public function UserInfo($para1,$para2){
            echo $para1.' '.$para2;
        }
    }

    class SubController extends MainController{
        public function UserInfo($para1,$para2,$para3=false,$para4=false){
            echo $para1.' '.$para2.' '.$para3.' '.$para4;
        }
    }

    $mainObj = new MainController;
    $mainObj->UserInfo('Md','Rafikul');
    echo '<br>';

    $subObj = new SubController;
    $subObj->UserInfo('Md','Rafikul','Islam','Rafi');

    //If you don't assign false, you get an error on php version 7.
?>