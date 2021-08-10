<?php
class Test{
    private $name='santosh';
    public function __get($property){
        echo "$$property private/non existing method can not be access from outside class ";
    }

}
$test=new Test();
echo $test->cast;
?>