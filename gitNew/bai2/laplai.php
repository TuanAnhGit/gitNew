<?php
if((isset($_POST['hienthi']))&&($_POST['hienthi'])){
    $n=$_POST['n'];
    
    for ($i=1; $i <= $n ; $i++) { 
       $dayso=$i;

       echo $dayso;
    }
    
}else{
    echo 'hack hả mậy?!!!';
}

?>
