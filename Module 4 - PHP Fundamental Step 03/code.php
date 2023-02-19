<!-- 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

4.Write a PHP function to check if a string contains only letters and whitespace.

5.Write a PHP function to find the second largest number in an array of numbers.

To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly. -->


<?php

// 1st Problem Solution
function sortd($a,$b){
    return strlen($b)-strlen($a);
}
$array = array("Hello","World","I","am","a","student");
usort($array,'sortd');
print_r($array);

// 2nd Problem Solution
function concat($a,$b){
    $c = $a.$b;
    return $c;
}
echo concat("Hello","World");

// 3rd Problem Solution
function remove($array){
    array_shift($array);
    array_pop($array);
    return $array;
}
$array = array("Hello","World","I","am","a","student");
print_r(remove($array));

// 4th Problem Solution
function checkWhiteSpace($string){
    if(preg_match('/^[a-zA-Z\s]+$/', $string)){
        echo "String contains only letters and whitespace";
    }else{
        echo "String contains other characters";
    }
}
echo checkWhiteSpace("Hello World");

// 5th Problem Solution
function secondLargest($array){
    $max = max($array);
    $key = array_search($max,$array);
    unset($array[$key]);
    $max = max($array);
    return $max;
}
$array = array(1,2,3,4,5,6,7,8,9,10);
print_r(secondLargest($array));


?>