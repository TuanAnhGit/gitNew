<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .boxsp{
            margin: auto;
            max-width: 800px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="boxsp">
        <!-- mỗi sp đề có 1 form || tất cả các form đền trả về 1 file php duy nhất -->
        <div>
            <form action="addtocart.php" method="post">
                <img src="../image/dienthoai1.jpg" alt="điện thoại">
                <p>Điện thoại 1</p>
                <p>Gía: <span>20.000.000</span>đồng</p>
                <!--khởi tạo input hidden có value giống hệt html và name dễ nhớ   -->
                <input type="hidden" name="img" value="../image/dienthoai1.jpg">
                <input type="hidden" name="tensp" value="Điện thoại 1">
                <input type="hidden" name="gia" value="20000000">
                <input type="hidden" name="id" value="1">
                <input type="submit" name="dathang" value="Đặt hàng">
            </form>
        </div>
        <div>
            <form action="addtocart.php" method="post">
                <img src="../image/dienthoai2.jpg" alt="điện thoại">
                <p>Điện thoại 2</p>
                <p>Gía: <span>25.000.000</span>đồng</p>
                <input type="hidden" name="img" value="../image/dienthoai2.jpg">
                <input type="hidden" name="tensp" value="Điện thoại 2">
                <input type="hidden" name="gia" value="25000000">
                <input type="hidden" name="id" value="1">
                <input type="submit" name="dathang" value="Đặt hàng">
            </form>
        </div>
        <div>
            <form action="addtocart.php" method="post">
                <img src="../image/dienthoai3.jpg" alt="điện thoại">
                <p>Điện thoại 3</p>
                <p>Gía: <span>50.000.000</span>đồng</p>
                <input type="hidden" name="img" value="../image/dienthoai3.jpg">
                <input type="hidden" name="tensp" value="Điện thoại 3">
                <input type="hidden" name="gia" value="50000000">
                <input type="hidden" name="id" value="1">
                <input type="submit" name="dathang" value="Đặt hàng">
            </form>
        </div>
    </div>
</body>
</html>