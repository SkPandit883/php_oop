<?php
    spl_autoload_register(function ($class) {
        require $class.'.php';
    });

 
    $first=new First();
    echo '</br>';
    $second=new Second();
    echo '</br>';

    $third=new Third();

?>