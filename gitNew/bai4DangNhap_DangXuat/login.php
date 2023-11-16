<?php
//sử dụng session
    session_start();
    //sử dụng header thì cần:
    ob_start();
//ĐĂNG NHẬP TẠO ĐỐI TƯỢNG MẢNG
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        //tạo mảng
        $objuser=array($user,$pass);
        //echo var_dump($objuser);
        //SO SÁNH VỚI DB
        //LƯU SESSION
        $_SESSION['objuser']= $objuser;
        //CHUYỂN TRANG
        header('location: LOGINED.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TỰ ACTION LẠI TRANG THÌ DÙNG ĐOẠN ACTION DƯỚI -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="user">TÊN ĐĂNG NHẬP</label>
        <input type="text" name="user" id="user"><br>
        <label for="pass">MẬT KHẨU</label>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" name="dangnhap" value="ĐĂNG NHẬP">
    </form>
</body>
</html>