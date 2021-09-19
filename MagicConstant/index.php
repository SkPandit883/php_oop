<?php

echo "line no: ".__LINE__."<br>";
echo "file path: ".__FILE__."<br>";//return path of file
echo "file dir: ".__DIR__."<br>";//return path of file

function MyFunction(){
    echo "function name :".__FUNCTION__."<br>";
}
class MyClass{
    public function magicConstant(){
        echo __CLASS__;

    }
    public function methodShow(){
        echo __METHOD__;
    }
}
MyFunction();
echo "<br>";
$myclass=new MyClass();
$myclass->magicConstant();
echo "<br>";
$myclass->methodShow();
?>