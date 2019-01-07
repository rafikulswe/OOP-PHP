<?php
//There two types of class- 1. Parent Class, 2. Child Class

//1. Parent Class
    class Controller{
        
        public function MethodName(){
            echo "I am a method. i am in parent class.";
        }

        //Variable
        public $name ="Rafikul Islam";
        public function MyName(){
            echo "Your taken variable's value is ".$this->name;
        }
    }
//End Parent Class    

//2. Child Class
    class UserController extends Controller{
        public function AnotherMethod(){
            echo "I am another method and i am in child class.";
        }
    }
//End Child Class

//Let's create an object of Parent class for call any method of this class.
    $parentObj = new Controller;
    echo $parentObj->MethodName();
    echo '<br>';

    echo $parentObj->MyName();
    echo '<br>';

//Let's create an object of Child class for call any method of this class.
    $childObj = new UserController;
    echo $childObj->AnotherMethod();
?>