<?php
//tính tổng các số chẵn từ 5 đến 30
    $a=0;
    for($i=1;$i<=20;$i++){
        if($i%2==0){
            $a+=$i;

        }
    }
    echo "<h2>Tổng các số chẵn từ 1 đến 20 là: ".$a."</h2>";
?>