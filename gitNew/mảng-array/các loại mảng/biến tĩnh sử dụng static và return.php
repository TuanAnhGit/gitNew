<?php
function natural_sum($n) {
    static $count = 0;
    $sum = $n*($n + 1)/2;
    echo 'The sum of first '.$n.' natural numbers is '.$sum.'.<br>';
    $count += 1;
    return $count;
}
natural_sum(10);
natural_sum(30);
$count = natural_sum(45);
echo 'natural_sum() was called '.$count.' time(s).';
// natural_sum() was called 3 time(s). 
?>