<?php

echo "line no: ".__LINE__."<br>";
echo "file path: ".__FILE__."<br>";//return path of file
echo "file dir: ".__DIR__."<br>";//return path of file

function MyFunction(){
    echo "function name :".__FUNCTION__."<br>";
}
MyFunction()
?>