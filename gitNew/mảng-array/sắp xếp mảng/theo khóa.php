<?php
$airport_count = ["United States" => 13513, "Brazil" => 4093, "Mexico" => 1714, "Canada" => 1467, "Russia" => 1218, "Argentina" => 1138, "Bolivia" => 855, "Colombia" => 836, "Paraguay" => 799, "Indonesia" => 673];
ksort($airport_count);
foreach($airport_count as $country=>$count) {
    echo str_pad($country, 15)." ".$count."\n";
}
/* 
Argentina 1138 
Bolivia 855 
Brazil 4093 
Canada 1467 
Colombia 836 
Indonesia 673 
Mexico 1714 
Paraguay 799 
Russia 1218 
United States 13513 
*/
?>