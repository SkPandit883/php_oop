<?php
class Test{
    public function __toString() {
        return 'cant print object as string of class '.get_class($this);
    }
}
$test=new Test();
echo $test;
?>