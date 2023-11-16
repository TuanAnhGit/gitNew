<?php
$string = "One,Two,Three";
// explode a string by comma 
$array = explode(",", $string);
// output should be an array 
echo '<pre>';
print_r($array);
// output 
/*Array 
( 
[0] => One 
[1] => Two 
[2] => Three 
)*/
?>