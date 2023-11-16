<?php
    function isNguyenTo($n){
        for ($i=2; $i < $n; $i++){
            if($n%$i==0){
                return 0;
            }
               
        }
        return 1;
    }

    $n=1743;
    $kq=isNguyenTo($n);
    if($kq==1){
        echo "Số ".$n." là số nguyên tố";
    }else{
        echo "Sô ".$n." Không Phải là số nguyên tố";
    }
    
?>