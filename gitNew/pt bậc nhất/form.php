<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    //kiểm tra số a cần phải nhập và nhập là số mới được
    function kiemtra() {
        var giatria = document.getElementById('soa');
        if (giatria.value==""){
            alert('Cần phải nhập số a');
            giatria.focus();
            return false;
        }else if(!Number(giatria.value)){
            alert('Nhập cho đúng coi!');
            return false;
        }
        return true;
       
    }
    //kiểm tra số b cần phải nhập và nhập là số mới được
    function kiemtra() {
        var giatrib = document.getElementById('sob');
        if (giatrib.value==""){
            alert('Cần phải nhập số b');
            giatrib.focus();
            return false;
        }else if(!Number(giatrib.value)){
            alert('Nhập cho đúng coi!');
            return false;
        }
        return true;
       
    }
</script>
<style>
    *{
        box-sizing: border-box;
    }
    .ptbox {
        width: 600px;
        height: 400px;
        margin: auto;
        background-color: rgb(231, 144, 144);
    }
    .boxinput {
        width: 400px;
        height: 100px;
        margin: auto;
    }
    .boxinputa label{
        display: inline-block;
        width: 200px;
        height: 100px;
        text-align: center;
        padding-top: 40px;
        font-size: 30px;
        
    }
    .boxinputb label{
        display: inline-block;
        width: 200px;
        height: 100px;
        text-align: center;
        padding-top: 40px;
        font-size: 30px;
    }
    .nut{
        width: 150px;
        height: 40px;
        margin: auto;
        text-align: center;
    }
    input[type="submit"]{
        font-size: 30px; 
    }
    input[type="text"]{

    }
    h2{background-color: brown;
        color: white;
        width: 600px;
        height: 80px;
        line-height: 80px;
        margin: auto;
        text-align: center;
        font-size: 50px;
    }
    h3{margin-left:10px;}
    .ketqua{
        margin-top: 10px;
    }
</style>

<body>
    <h2>Giải phương trình bậc nhất</h2>
    <div class="ptbox">
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="boxinput boxinputa">
                <label for="soa">Nhập số a:</label>
                <input type="text" name="soa" id="soa">
            </div>

            <div class="boxinput boxinputb">
                <label for="sob">Nhập số b:</label>
                <input type="text" name="sob" id="sob">
            </div>

            <div class="nut">
                <input type="submit" onclick="return kiemtra()" name="giaipt" value="KẾT QUẢ">
            </div>
        </form>
        <h1 style="margin-left:10px;">Phương trình có dạng: ax + b = 0</h1>
    </div>
<?php
    if((isset($_POST['giaipt']))&&($_POST['giaipt'])){
        //lấy giá trị về
        $a=$_POST['soa'];
        $b=$_POST['sob'];
        //xử lý
        if($a==0) $nghiem="vô nghiệm";
        elseif($b==0) $nghiem=" vô nghiệm";
        else $nghiem=-$b/$a;
        $pt=$a."x + ".$b." = 0";
        //out put
        $kq='<div class="ptbox ketqua">
        <h2>Kết quả phương trình là:</h2>
        <h3>Phương trình đã nhập:'.$pt.' </h3>
        <h3>Phương trình có nghiệm: x= '.$nghiem.'</h3>
    </div>';
    //hiển thị kết quả
    echo $kq;
    }
?>

</body>
</html>