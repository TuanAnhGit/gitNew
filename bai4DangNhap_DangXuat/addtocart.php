<?php
    session_start();
    ob_start();
    if(isset($_POST['dathang'])&&($_POST['dathang']));
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
    //lấy giá trị
    $img=$_POST['img'];
    $tensp=$_POST['tensp'];
    $gia=$_POST['gia'];
    $id=$_POST['id'];
    $sl=1;
    //tạo mảng con
    $sp=array($id,$tensp,$img,$gia,$sl);

    //add vào giỏ hàng
    //$_SESSION['cart'][]=$sp;
    
    array_push($_SESSION['cart'],$sp);
    header('location: viewcart.php')

?>