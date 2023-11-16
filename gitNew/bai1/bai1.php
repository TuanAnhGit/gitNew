<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <div>
        <form action="bai1sub.php" method="post">
            <label for="mssv">MSSV: </label><br>
            <input type="text" name="mssv" id="mssv"><br>
            <label for="ten">TÊN: </label><br>
            <input type="text" name="ten" id="ten"><br>
            <label for="mon1">MÔN 1: </label><br>
            <input type="text" name="mon1" id="mon1"><br>
            <label for="mon2">MÔN 2: </label><br>
            <input type="text" name="mon2" id="mon2"><br>
            <input type="submit" name="dangky" value="KIỂM TRA">
            <input type="reset" value="NHẬP LẠI">
        </form>
        <!-- <table>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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

        </table> -->

    </div>

</body>
</html>