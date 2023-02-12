<?php
// >>>>>>>>>>>>>>>>>>>>>> Assignment Solution <<<<<<<<<<<<<<<<<<<<<<<<<

// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
// function checkEvenOdd( $number ) {
//     $result = ( $number % 2 == 0 ) ? "{$number} is Even" : "{$number} is Odd";
//     return $result;
// }

// echo checkEvenOdd( 40 );

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series
function sumOfSeries( $number ) {
    $result = 0;
    echo "For {$number} the series: ";

    for ( $i = 1; $i <= $number; $i++ ) {
        $result += $i;
        echo " {$i} ";
    }

    return "\nSeries sum: " . $result;
}
echo sumOfSeries( 10 );

?>