<?php
    class Controller{
        public $name;
        public $email;

        public function __construct(){
            $this->name = 'Rafikul Islam';
            $this->email = 'r@gmail.com';
        }
        public function UserInfo(){
            echo "My name is ".$this->name." and Email ".$this->email;
        }
    }

    class User extends Controller{
        public $mobile;

        public function __construct(){
            $this->name = 'Rafi';
            $this->name = 'rafikulswe@gmail.com';
            $this->name = '01729-34 69 59';
        }
        public function UserInfo(){
            echo "My name is ".$this->name." and Email ".$this->email." and my mobile ".$this->mobile;
        }
    }
    $userobj = new User;
    echo $userobj->UserInfo();
    //when we use the method of parent class by overwriting this called polymorphism.
?>