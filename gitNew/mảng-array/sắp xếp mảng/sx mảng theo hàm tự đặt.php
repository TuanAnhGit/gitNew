<?php
$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];
sort($random_words);
echo "Regular Sort Function: \n";
foreach($random_words as $element) {
    echo str_pad($element, 9)." ";
}
/* 
Regular Sort Function: 
ape apple banana elephant eye picnic pie zoo 
*/
function custom_sort($word_a, $word_b) {
    if (strlen($word_a) < strlen($word_b)) {
        return -1;
    }
    if (strlen($word_a) == strlen($word_b)) {
        return strcmp($word_a, $word_b);
    }
    if (strlen($word_a) > strlen($word_b)) {
        return 1;
    }
}
usort($random_words, "custom_sort");
echo "\nCustom Sort Function: \n";
foreach($random_words as $element) {
    echo str_pad($element, 9)." ";
}
/* 
Custom Sort Function: 
ape eye pie zoo apple banana picnic elephant 
*/
?>