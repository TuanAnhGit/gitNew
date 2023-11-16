<?php
$all_items = ["Charger", "Keyboard", "Smartphone", "Baseball", "Bat", "Mouse"];
$replacements = ["Pen", "Headphones"];
array_splice($all_items, 3, 2, $replacements);
print_r($all_items);
/* 
Array 
( 
[0] => Charger 
[1] => Keyboard 
[2] => Smartphone 
[3] => Pen 
[4] => Headphones 
[5] => Mouse 
) 
*/
?>