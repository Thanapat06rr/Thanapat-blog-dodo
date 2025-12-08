<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ข้อที่1</h1>
    <?php
    $name = "นายธนภัทร อัคศรี";
    $class = "ปวช.2";
    $branch = "เทคโนโลยีสารสนเทศ";
    $age = "16ปี";
    echo "สวัสดีครับ ผมชื่อ $name <br> ระดับชั้น $class <br> สาขา $branch <br> อายุ $age <br>";
    ?>
    <h1>ข้อ2</h1>
    <?php
    $price = 1500;
    $discount = 0.15;
    $cc = $price * $discount;
    $cv = $price - $cc;
    echo "ราคาสินค้า: $price บาท <br>
    ส่วนลด $cc บาท <br>
    ราคาสุทธิ $cv บาท ";
    ?>
</body>
</html>

       