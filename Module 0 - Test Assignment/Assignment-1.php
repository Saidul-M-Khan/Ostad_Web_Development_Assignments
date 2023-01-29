<?php
// >>>>>>>>>>>>>>>>>>>>>> Assignment Problem <<<<<<<<<<<<<<<<<<<<<<<<<
// $num = 5;
// if ($num > 0) {
//     $result = 'positive';
//     echo $result;
// } else if ($num < 0) {
//     $result = 'negative';
//     echo $result;
//     if ($num < -10) {
//         $result = 'value is below -10';
//         echo $result;
//     }
// } else {
//     $result = 'its zero';
//     echo $result;
// }

// >>>>>>>>>>>>>>>>>>>>>> Assignment Solution <<<<<<<<<<<<<<<<<<<<<<<<<
$num = -5;
echo $result = $num = ($num > 0) ? 'positive' : (($num < 0) ? (($num < -10) ? 'value is below -10' : 'negative') : 'its zero');
