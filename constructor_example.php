<?php
    class constructor_exa{
        function __construct(){
            echo "hello, pandey ji is here..... ";
        }
    }
    $con=new constructor_exa();


    class demo{
        public function demo(){
            echo "constructor example";
        }
    }
    class demo1 extends demo{
        public function __construct(){
            echo parent::demo();
            echo "constroctur2..........";
        }        
    }

    $obj1=new demo1();
?>