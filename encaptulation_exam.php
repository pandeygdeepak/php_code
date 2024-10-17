<?php
class person{
    public $name;
    public $age;
    function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;

    }
    function setage($ag){
        $this->ag=$ag;
    }
    function display(){
        echo "welcome ".$this->name."<br>";
        return $this->age-$this->ag;
    }
}

$obj=new person("deepak",19);
$person->setage(1);
echo "You are ".$person->display()." years old";

?>