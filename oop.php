<?php

    Class Myclass{
        public $x, $y, $z; 

        public function __construct($a, $b)
        {
            $this->x = $a;
            $this->y = $b;
        }

        public function mysum(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $asib = new Myclass(200, 250);

    echo $asib->mysum();
echo "<br>";
    $asib1 = new Myclass(150, 150);
    echo $asib1->mysum();
 
?>