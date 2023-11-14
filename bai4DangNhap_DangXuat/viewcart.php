<?php
    session_start();
    if(isset($_SESSION['cart'])){
        //echo var_dump($_SESSION['cart']);
        echo '<br><br>Đặt hàng tiếp tục. <a href="sanpham.html">Click</a> vào đây!';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 70vw;
            margin: auto;
        }
        table{
            width: 70vw;
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
        }
        th{
            background-color: #999;
        }
    </style>
</head>
<body>
    <div>
        <h1>ĐƠN HÀNG CỦA BẠN</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            <?php
                $tong=0;//khởi tạo biến tổng = 0 để tính tổng
                $i=0;//cho biến i = 0 để hiện số thứ tự và hiện id trên dường dẫn
                foreach ($_SESSION['cart'] as $sp){//với mỗi 
                    $ttien=$sp[3]*$sp[4];
                    $tong+=$ttien;
                    echo '<tr>
                                <td>'.($i+1).'</td>
                                <td><img src="'.$sp[2].'" width="50px";></td>
                                <td>'.$sp[1].'</td>
                                <td>'.$sp[3].' giá</td>
                                <td>'.$sp[4].'</td>
                                <td>'.$ttien.'</td>
                                <td><a href="delcart.php?id='.$i.'">Xóa</a></td>
                        </tr>';
                    $i++;
                }
            ?>
            <!-- <tr>
                <td>1</td>
                <td>img</td>
                <td>tensp</td>
                <td>ddon giá</td>
                <td>sl</td>
                <td>ttien</td>
                <td>xóa</td>
            </tr> -->
            <tr>
                <td colspan="5">Tổng đơn hàng</td>
                <td><?=$tong;?></td>
                <td></td>
            </tr>
            
        </table>
        <p><a href="sanpham.php">Tiếp tục đặt hàng</a></p>
        <p><a href="delcart.php">Xóa giỏ hàng</a></p>
    </div>
    
    
</body>
</html>
<?php
    }else{
        echo '<br><br>Gior hàng rõng. Đặt hàng <a href="sanpham.html">Click</a> vào đây!';
    }
?>