<?php 
    session_start();
    del_session();
    echo 'đã xóa session';
    header('location: LOGINED.php');
    function del_session(){
        unset($_SESSION['objuser']);
       // header('location: LOGINED.php');
    }
    
?>