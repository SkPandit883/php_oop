<?php
$name='santosh';
echo isset($name);//return 1


//handling error in class in most professional ways

class Test{
    private $firstname;
    private $lastname;

    public function setName($firstname,$lastname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    public function __isset($property){
        echo isset($this->$property);
    }
    
}
$test=new Test();
$test->setName('santosh','pandit');
echo "</br>";
echo isset($test->firstname);//throw response 0 if __isset() method is not used ,lets implement it in line 16
?>