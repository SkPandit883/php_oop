
<?php

  class Set{
      private $name;
      public function __set($property,$value){
        if(property_exists($this,$property)){
            echo "<h3 style='color:red;font-weight:200'> can not set value: $value to private property $$property </h3>";   

        }else{
            echo "<h3 style='color:red;font-weight:200'> can not set value: $value to non-existing property $$property </h3>";   
        }
    }
  }
 $set = new Set();
 $set->cast='pandit';
 $set->name='santosh';
?>