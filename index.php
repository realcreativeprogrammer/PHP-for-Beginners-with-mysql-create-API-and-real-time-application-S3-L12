<?php
class Human{
    public $name;
    public $age;
    public $gender;
    public $height;
    public $weight;

    function __construct($name,$age,$gender,$height,$weight){
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
        $this->height=$height;
        $this->weight=$weight;
    }

    function get_age(){
        return $this->age;
    }
    function set_age($newvalue){
        $this->age=$newvalue;
    }

    function check(){
        $result=$this->weight/($this->height*$this->height);
        if($result<= 18.5){
            echo 'under weight';
        }elseif($result>18.5 && $result <=24.9){
            echo 'normal weight';
        }elseif($result>=25 && $result <=29.9){
            echo 'over weight';
        }else{
            echo 'obesity';
        }
    }
}

$obj1=new Human('ahmed',19,'male',1.78,76);
$obj1->check();
echo '<br>';
$obj2=new Human('mohemed',22,'male',1.86,88);
$obj2->check();
$obj2->set_age(44);
echo $obj2->get_age();
?>