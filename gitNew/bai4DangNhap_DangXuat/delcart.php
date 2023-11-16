<?php
    session_start();//sử dụng để lưu phiên
    ob_start();//sử dụng để mở host xịn xịn
    if(isset($_SESSION['cart'])) {//nếu cart tồn tại thì
        if(isset($_GET['id'])){//nếu tồn tại phương thức nhận là GET với id đường dẫn thì
            array_splice($_SESSION['cart'],$_GET['id'],1);//xóa phần tử trong mảng cart tại vị trí GET id

        }else{
            unset($_SESSION['cart']);
        }
        if(count($_SESSION['cart'])>0) header('location: viewcart.php');  //nếu phần tử trong mảng lớn hơn 0 thì ở lại viewcart
        else    header('location: sanpham.php');//ngược lại hết sp thì về sanpham.php || vì có 1 câu lệnh con nên ko cần ngoặc nhọn

    }
?>  