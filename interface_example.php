<?php
    interface a{
        public function des1();
    }
    interface b{
        public function des2();
    }
    
    class demo implements a,b{
        public function des1(){
            echo "Depak ";
        }
        public function des2(){
            echo "pandey";
        }
    }

    $obj=new demo();
    $obj->des1();
    $obj->des2();

?>