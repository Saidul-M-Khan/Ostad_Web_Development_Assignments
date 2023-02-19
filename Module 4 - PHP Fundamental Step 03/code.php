<?php

// 1st Problem Solution
// function sortd($a,$b){
//     return strlen($b)-strlen($a);
// }
// $array = array("Hello","I","am","Saidul","Mursalin","Khan");
// usort($array,'sortd');
// print_r($array);

// 2nd Problem Solution
// function concat($a,$b){
//     $c = $a.$b;
//     return $c;
// }
// echo concat("Hello","World");

// 3rd Problem Solution
function remove($array){
    array_shift($array);
    array_pop($array);
    return $array;
}
$array = array("Hello","I","am","Saidul","Mursalin","Khan");
print_r(remove($array));

// 4th Problem Solution
// function checkWhiteSpace($string){
//     if(preg_match('/^[a-zA-Z\s]+$/', $string)){
//         echo "\n'{$string}' contains only letters and whitespace\n";
//     }else{
//         echo "\n'{$string}' contains other characters\n";
//     }
// }
// echo checkWhiteSpace("Hello World");
// echo checkWhiteSpace("32135143212");

// 5th Problem Solution
// function secondLargest($array){
//     $max = max($array);
//     $key = array_search($max,$array);
//     unset($array[$key]);
//     $max = max($array);
//     return $max;
// }
// $array = array(22,55,10,2,62,32,12);
// print_r("Second Largest Value: " . secondLargest($array));


?>