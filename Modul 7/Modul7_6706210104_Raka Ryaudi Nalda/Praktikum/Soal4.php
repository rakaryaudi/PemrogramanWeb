<!DOCTYPE html>
<html>
<body>

<?php
    function hasilPrima($angka){
    if($angka == 1){
        return false;
    }
    if($angka == 2){
        return false;
    }

    $y = sqrt($angka);
    $y = floor($y);

    for($i=2; $i<= $y; ++$i){
        if($angka % $i == 0){
            break;
        }
    }

    if($y == $i-1){
        return true;
    } else {
        return false;
    }
}

    function mengecekPrima($n,$m){
        $total = 0;

        for($i = $n; $i <= $m; $i++){
            if(hasilPrima($i)){
                echo $i.', ';
                $total++;
            }
        }
        echo"<br>Jumlah bilangan prima yaitu ".$total."<br>";
    }

mengecekPrima(0,70);
?>

</body>
</html>