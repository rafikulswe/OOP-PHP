<?php
//Wrapping some data in single unit is called Encapsulation. 
//Encapsulation is used to safe data or information in an object from other it means encapsulation is mainly used for protection purpose.
//Private method means it can be accessed within same class. Outside, Class can't access private method of other class.That's why encapsulation is known as data hiding is the main advantage for encapsulation.
//Second advantage of encapsulation is you can make the class read only or write only by providing setter or getter method.

class Capsule{
	public $name;

    private function userName($name){
		return $this->name = $name;
	}

    public function showUserName($name){
		echo self::userName($name);
	}

}
$capObj = new Capsule;
$capObj->showUserName('Rafikul Islam Rafi');
?>