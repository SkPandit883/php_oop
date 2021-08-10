<?php
class Test{
    protected $firstname='santosh';
    protected $lastname='pandit';
    protected $course='php';
    public function __sleep() {
        return array('firstname','lastname');
    }
}
$test = new Test();
$arr=serialize($test);
echo $arr;

?>