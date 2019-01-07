<?php
//An interface is a description of the actions that an object can do.
//All methods declared in an interface must be public; this is the nature of an interface.
//All methods in the interface must be implemented within a class; failure to do so will result in a fatal error.
//Interfaces can be extended like classes using the extends operator.
//It's mainly for software analyst, the create interface and the developer work by maintaining this created Interface.

interface Tree {
    public function setProperty($name);
    public function description();
}
class Mangoes implements Tree {
   public function setProperty($name) {
        $this->name = $name;
    }
    public function description() {
        echo 'It is a ' . $this->name . ' tree<br>';
  }
}
$Mango = new Mangoes();
$Mango->setProperty('Mango');
$Mango->description();
echo "for details about Interface: ";
echo "https://www.valuebound.com/resources/blog/object-oriented-programming-concepts-php-part-1";
?>