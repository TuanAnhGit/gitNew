<?php
function natural_sum($n) {
    $count = 0;
    $sum = $n*($n + 1)/2;
    echo 'The sum of first '.$n.' natural numbers is '.$sum.'.<br>';
    
    $count += 1;
    echo 'natural_sum() have been called '.$count.' time(s).';
}
natural_sum(10);
// The sum of first 10 natural numbers is 55.natural_sum() have been called 1 time(s). 
natural_sum(30);
// The sum of first 30 natural numbers is 465.natural_sum() have been called 1 time(s). 
natural_sum(45);
// The sum of first 45 natural numbers is 1035.natural_sum() have been called 1 time(s). 
?>