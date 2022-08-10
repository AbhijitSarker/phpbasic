<?php
$asib_age = 24;
$shakib_age = 24;

if($asib_age > $shakib_age){
    echo 'asib older';
}elseif($shakib_age > $asib_age){
    echo 'shakib older';
}else{
    echo 'simmiler';
}


$num_1 = array(12, 55, 39);


$max_num = max($num_1);
echo $max_num;

$num1 = 123;
$num2 = 66;
$num3 = 56;

if($num1 > $num2 && $num1 > $num3){
    echo 'num one';
}elseif($num2 > $num1 && $num2 > $num3){
    echo 'num two';
}else{
    echo 'num three';
}

?>
