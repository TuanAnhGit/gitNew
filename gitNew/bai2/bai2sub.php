<?php
if((isset($_POST['hienthi']))&&($_POST['hienthi'])){
    // lay du lieu
    $n=$_POST['n'];

    //XỬ LÝ DỮ LIỆU

    //Nối chuỗi nên khởi tạo bằng ' <các loại thẻ> kèm văn bản hiển thị: '
    $dayso='<h2>Dãy số: ';
    $daysotong='<h3>Tong bang: ';   
    $tong=0;//Tính toán nên gán giá trị khởi tạo bằng 0

    //TẠO VÒNG LẶP
    for ($i=1; $i <= $n; $i++) { 
        //NỐI CHUỖI DUNG: $tenbien.= 
        $dayso.=$i; //hiển thị các số
        if ($i<$n) $dayso.=', ';//VĂN BẢN THUẦN ĐẶT TRONG NGOẶC KÉP HOẶC ĐƠN
        //
       //hiển thị các số ra
        if($i<$n) $daysotong.=' + ';
        //

        $tong+=$i;//LẶP LẠI VÒNG LẶP THÌ CỘNG DỒN $i VÀO
    }
    $dayso.='</h2>';
    $daysotong.=' = '.$tong.'</h3>';//XUẤT RA TỔNG CUỐI CÙNG
    //output
    echo $dayso;
    echo $daysotong;
}else{
    echo 'hack hả mậy?!!!';
}

?>
