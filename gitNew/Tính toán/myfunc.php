<!-- hàm chức năng thư viện nên lưu thành 1 file riêng -->
<?php
   
    function tinhtoan($a,$b,$p){
                $kq=0;
                switch ($p) {
                    case '+':
                        $kq=$a+$b;
                        break;
                    case '-':
                        $kq=$a-$b;
                        break;
                    case '*':
                        $kq=$a*$b;
                        break;
                    case '/':
                        $kq=$a/$b;
                        break;    
                    default:
                        break;
                }
                return $kq;

    }
    
    function hienthi($a,$b,$p,$k) {
         $kq='<div>
                    <p>Bạn đã nhập phép toán: '.$a.' '.$p.' '.$b.' = '.$k.'
                    </p>
             </div>';  
        echo $kq;     
    }

    
 ?>           