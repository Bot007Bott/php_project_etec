<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br> <br>
    <form action="" method="get">
        Code : <input type="number" name="code"> <br> <br>
        Name : <input type="text" name="name">   <br> <br>
        Quantity : <input type="number" name="qty"> <br> <br>
        Price : <input type="number" name="price"> <br> <br>
        <input type="submit"> 
    </form> <br> <br>

    <?php
        $code = $_GET["code"];
        $name = $_GET["name"];
        $qty = $_GET["qty"];
        $price = $_GET["price"];
        $total = $qty * $price;
        $payment;
        $discount=0;
        
        if($total >= 1 && $total <= 10) {
            $discount = 0.1;
        } else if($total > 10 && $total <= 20) {
            $discount = 0.2;
        } else if($total > 20 && $total <= 30) {
            $discount = 0.3;
        } else if($total > 30 && $total <= 40) {
            $discount = 0.4;
        } else if($total > 40 && $total <= 50) {
            $discount = 0.5;
        } else if($total > 50 && $total <= 60) {
            $discount = 0.6;
        } else {
            $discount = 0.7;
        }

        $payment = $total - ($total * $discount);

        echo "Code: {$code}<br>";
        echo "Product's Name: {$name}<br>";
        echo "Quantity: {$qty}<br>";
        echo "Price: $ {$price}<br>";
        echo "Total: $ {$total}<br>";
        echo "Discount:".($discount*100)."%<br>";
        echo "Payment: $ {$payment}<br>";
    ?>

</body>
</html>