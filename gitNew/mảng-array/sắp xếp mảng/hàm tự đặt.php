<?php
$tallest_buildings = [
    ["Building" => "Burj Khalifa","City" => "Dubai","Country" => "United Arab Emirates","Height" => 828,"Floors" => 163,"Year" => 2010],
    ["Building" => "Shanghai Tower","City" => "Shanghai","Country" => "China","Height" => 632,"Floors" => 128,"Year" => 2015],
    ["Building" => "Abraj Al-Bait Towers","City" => "Mecca","Country" => "Saudi Arabia","Height" => 601,"Floors" => 120,"Year" => 2012],
    ["Building" => "Ping An Finance Center","City" => "Shenzhen","Country" => "China","Height" => 599,"Floors" => 115,"Year" => 2017],
    ["Building" => "Lotte World Tower","City" => "Seoul","Country" => "South Korea" ,"Height" => 554,"Floors" => 123,"Year" => 2016]
];
function storey_sort($building_a, $building_b) {
    return $building_a["Floors"] - $building_b["Floors"];
}
usort($tallest_buildings, "storey_sort");
foreach($tallest_buildings as $tall_building) {
    list($building, $city, $country, $height, $floors) = array_values($tall_building);
    echo $building." is in ".$city.", ".$country.". It is ".$height." meters tall with ".$floors." floors.\n";
}
/* 
Ping An Finance Center is in Shenzhen, China. It is 599 meters tall with 115 floors. 
Abraj Al-Bait Towers is in Mecca, Saudi Arabia. It is 601 meters tall with 120 floors. 
Lotte World Tower is in Seoul, South Korea. It is 554 meters tall with 123 floors. 
Shanghai Tower is in Shanghai, China. It is 632 meters tall with 128 floors. 
Burj Khalifa is in Dubai, United Arab Emirates. It is 828 meters tall with 163 floors. 
*/
?>