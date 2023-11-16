<?php
    function pheptinh($a,$pt,$b){
        switch ($pt) {
            case '+':
                return $a+$b;
                break;
            case '-':
                return $a-$b;
                break;
            case '*':
                return $a*$b;
                break; 
            case '/':
                return $a/$b;
                break;       
            default:
                # code...
                break;
        }
        
    }
    $a=1;
    $b=5;
    echo "Tổng của ".$a." + ".$b." = ".pheptinh($a,"+",$b)."<br>";
    echo "Hiệu của ".$a." - ".$b." = ".pheptinh($a,"-",$b)."<br>";
    echo "Tích của ".$a." * ".$b." = ".pheptinh($a,"*",$b)."<br>";
    echo "Thương của ".$a." / ".$b." = ".pheptinh($a,"/",$b)."<br>";

?>