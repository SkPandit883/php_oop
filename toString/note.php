__toString(), a magic method which is called automatically when we want to print object of any class .

syntax :
public function __toString(){
    echo "cant print object as string of class ".get_class($this)
}