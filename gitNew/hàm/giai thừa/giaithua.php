<?php
    function giaithua($n){
        if($n==0){
            return 1;

        }else{
            return $n*giaithua($n-1);
        }
    }
    echo "7!= ".giaithua(7);
?>