 <?php
// for($i=1; $i <= 10; $i++){
//    if($i % 2 ==0){
//     echo $i.'<br>';
//    }
// }

// $i = 1;
// while($i<=10){
//     echo $i.'<br>';
//     $i++;
// }

// do{echo $i.'<br>';
//     $i++;
// }while($i<10);

$city = ['dhaka', 'tangail', 'gazipur', 'sylhet', 'chittagong', 'comilla'];
// print_r($city);

// echo $city[2];

// //assiciative array
// $run = array('shakib'=>55, 'asib'=>22, 'rakib'=> 223);
// echo $run['asib'];


// $students = array(
//     array('asib', 23),
//     array('shakib', 25)
// );

echo '<ul>';

foreach($city as $value){
    echo "<li> $value </li>";
}
echo '</ul>';

