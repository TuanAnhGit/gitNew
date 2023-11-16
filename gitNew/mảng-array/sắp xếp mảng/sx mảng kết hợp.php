<?php
$fruit_preferences = ["James" => "Orange", "John" => "Banana", "Patricia" => "Apple", "Jennifer" => "Mango", "Mary" => "Grapes"];
echo "Before Sorting — \n";
foreach($fruit_preferences as $person=>$preference) {
    echo $person." likes ".$preference."\n";
}
/* 
Before Sorting — 
James likes Orange 
John likes Banana 
Patricia likes Apple 
Jennifer likes Mango 
Mary likes Grapes 
*/
sort($fruit_preferences);
echo "After Sorting — \n";
foreach($fruit_preferences as $person=>$preference) {
    echo $person." likes ".$preference."\n";
}
/* 
After Sorting — 
0 likes Apple 
1 likes Banana 
2 likes Grapes 
3 likes Mango 
4 likes Orange 
*/
?>