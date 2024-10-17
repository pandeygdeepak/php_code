<?php
    class a{
        function fun1(){
            echo "hello this is 1st class";
        }
    }
    class b extends a{
        function fun2(){
            echo "hello this is class 2";
        }
    }

    $obj=new b();
    $obj->fun1();
?>