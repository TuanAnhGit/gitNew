<?php
$n = 99;
function natural_sum() {
    $sum = $GLOBALS['n']*($GLOBALS['n'] + 1)/2;
    echo 'The sum of first '.$GLOBALS['n'].' natural numbers is '.$sum.'.';
    $n = 20;
    $sum = $n*($n + 1)/2;
    echo 'The sum of first '.$n.' natural numbers is '.$sum.'.';
}
natural_sum();
// The sum of first 99 natural numbers is 4950. 
// The sum of first 20 natural numbers is 210. 
?>