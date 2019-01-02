<?php
class Controller{

    //member variable
    public $name;
    private $email;
    protected $mobile;

    //magic method= we will get all the property of this construct class from the child class
    public function __construct(){
        $this->name = "Rafikul Islam";
        $this->email = "rafikulswe@gmail.com"; //this can't be access from the child class
        $this->mobile = "01729346959";
    }
}

//AccessController Inherit the Controller by using keyword extends
class AccessController extends Controller{
    
    public function details(){
        $data = array(
            'name' => $this->name,
            'mobile' => $this->mobile
        );
        return $data;
    }
}
$mainObj = new AccessController;
$value = $mainObj->details();
foreach($value as $val){
    echo $val."<br>";
}
?>
