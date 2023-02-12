<?php

    $tuition    = 20000;
    echo "The tution fee is {$tuition} \n";
    $commission = ( $tuition >= 20000 ) ? "With 25% commission, the commission is " . ($tuition*0.25) . " and the tuition fee after commission is " . ($tuition-($tuition*0.25)) : (  ( $tuition >= 10000 && $tuition <= 20000 ) ? "With 20% commission, the commission is " . ($tuition*0.20) . " and the tuition fee after commission is " . ($tuition-($tuition*0.20)) : (  ( $tuition >= 7000 && $tuition <= 10000 ) ? "With 15% commission, the commission is " . ($tuition*0.15) . " and the tuition fee after commission is " . ($tuition-($tuition*0.15)) : 'Invalid Data' ) );
    echo $commission;

?>