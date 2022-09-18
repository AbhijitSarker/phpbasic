<?php

    Class Myclass{
        public $x, $y, $z; 

        public function mysum(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $asib = new Myclass();
    $asib->x = 100;
    $asib->y = 150;

    echo $asib->mysum();
 
?>