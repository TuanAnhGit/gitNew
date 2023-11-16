<?php
    session_start();
    if (isset($_SESSION['objuser'])) {
       
        echo  'Bạn đã đăng nhập thành công vơi: ';
        echo '<br>- Tên đăng nhập: '.$_SESSION['objuser'][0];
        echo '<br>- Mật khẩu: '.$_SESSION['objuser'][1];
        echo '<br> Bạn muốn thoát khỏi đây không? <a href="del_logined.php">CLICK</a> vào đây đi.';
    }else {
        echo '<br> Bạn đã thoát khỏi hệ thống. Vui lòng <a href="login.php">ĐĂNG NHẬP</a> lại.';
    }  
?>