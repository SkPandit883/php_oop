<?php

class Call{
    protected $name='santosh kumar pandit';

    private function getName(){
        echo  "name :$this->name";
    }

    public function __call($method,$args){
        if(method_exists($this,$method)){//check whether method existed or not
            //$this refers to Call class
            call_user_func_array([$this,$method],$args);//call method of the class getName()
        }else{
            echo "<h3 style='color:red;font-weight:200'>can not access non-existing method :$method()</h3>";   
            

        }
    }
}

$call=new Call();
$call->getName();
?>