<style>
        th, td {
            border:1px solid red;
            padding: 5px;
        }
        table{
            width: 450px;
            margin:auto;
            margin-top:20px;
            border-collapse: collapse;
        }
        th {
            background-color: aquamarine;
        }
        td{
            height:20px;
        }
        div{background-color: antiquewhite;
            width:500px;
            margin:auto;
        }
        form{
            margin:auto;
            width:180px;       
        }

    </style>
<?php 

if (isset($_POST['dangky'])&&($_POST['dangky'])) {
    //kiểm tra dữ liệu

    //lấy dữ liệu
    $mssv = $_POST['mssv'];
    $ten = $_POST['ten'];
    $mon1 = $_POST['mon1'];
    $mon2 = $_POST['mon2'];
    //xử lý dữ liệu
    $dtb=($mon1+$mon2)/2;
    if (($dtb>9)&&($dtb<=10)){
        $xl="XUẤT SẮC";

    }elseif(($dtb>8)&&($dtb<=9)){
        $xl="GIỎI";
    }elseif(($dtb>7)&&($dtb<=8)){
        $xl="KHÁ";
    }else{
        $xl="GỚT RỒI";
    }

    //THƯỞNG
    if (($dtb>9)&&($dtb<=10)){
        $thuong="CÚP + 500K";

    }elseif(($dtb>8)&&($dtb<=9)){
        $thuong="CÚP";
    }else{
        $thuong="CHÚC BẠN MAY MẮN LẦN SAU";
    }

    //HIỂN THỊ DỮ LIỆU
    $kq='<table>
                <tr>
                    <th>TÊN</th>
                    <th>MSSV</th>
                    <th>MÔN 1</th>
                    <th>MÔN 2</th>
                    <th>ĐTB</th>
                    <th>XẾP LOẠI</th>
                    <th>Thưởng</th>
                </tr>
                <tr>
                    <td>'.$ten.'</td>
                    <td>'.$mssv.'</td>
                    <td>'.$mon1.'</td>
                    <td>'.$mon2.'</td>
                    <td>'.$dtb.'</td>
                    <td>'.$xl.'</td>
                    <td>'.$thuong.'</td>
                </tr>

            </table>';
        echo $kq;

}

?>