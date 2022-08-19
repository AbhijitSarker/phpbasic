<?php 
function add_num($x,  $y){
    echo $x + $y;
}

add_num(5, 10);


function add_num($x,  $y){
    return $x + $y;
}

echo add_num(5, 10);



function about_me($x, $y){
    echo "i, I am $x. I am $y years old.";
}
about_me('asib', 25);


?>