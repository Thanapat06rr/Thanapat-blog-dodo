<?php
$productPrice =0;
$weight =0;
$isMember =false;
$shippingFee =0;
$discount =0;
$sum =0;


if (isset($_POST['submit'])) {
    $productPrice = $_POST['productPrice'];
    $weight = $_POST['weight'];
    $isMember = isset($_POST['isMember']);

    if($productPrice >=2000){
        $shippingFee =0;
    }elseif($weight <=2){
         $shippingFee =50;
    }elseif($weight <=10){
         $shippingFee =100;
    }elseif($weight >10){
         $shippingFee =200;
    }

    if($isMember === true && $productPrice >=3000){
        $discount=$productPrice*10/100;
    }elseif($isMember === true && $productPrice <3000){
         $discount=$productPrice*5/100;
    }else{
         $discount=0;
    }


    $sum=$productPrice-$discount+$weight;
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
    <form action="" method="POST">
        ราคาสินค้า <input type="text" name="productPrice"> <br>
        น้ำหนักสินค้า <input type="text" name="weight"> <br>
        สมาชิก <input type="checkbox" name="isMember"> <br>
        <button type="submit" name="submit">submit</button>
    </form>
    <p>ราคาสินค้า:<?= $productPrice ?></p>
    <p>ค่าจัดส่ง:<?= $shippingFee ?></p>
    <p>ส่วนลด:<?= $discount ?></p>
    <p>ราคาสุทธิ:<?= $sum ?></p>
</body>
</html>