<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="soa" id="soa1">
        <select type="" name="pheptinh">
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="sob" id="sob1">
        <input type="submit" name="tinhtoan" value="Kiểm Tra">
    </form>
    <?php
        include "myfunc.php";
        if((isset($_POST['tinhtoan']))&&($_POST['tinhtoan'])){
           
            //lấy giá trị từ form
            $soa=$_POST['soa'];
            $sob=$_POST['sob'];
            $pt=$_POST['pheptinh'];

            //xử lý và lấy kết quả
            $kq=tinhtoan($soa,$sob,$pt);
            //hiển thị
            hienthi($soa,$sob,$pt,$kq);
           

        }

        
    ?>
    <!-- <div>
        <p>Bạn đã nhập phép tinh: a + b = kq</p>
    </div> -->

    <!-- ko tham số hàm hiển thị -->
    <!-- có tham số truyền kết quả trả về giá trị-->
</body>
</html>
