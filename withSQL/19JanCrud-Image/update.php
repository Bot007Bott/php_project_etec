<?php
require 'connection.php';
if(isset($_POST['btnSubmit'])) {
    if(!is_dir('image')) {
        mkdir('image',0777, true);
    }
    $id = $_POST['product_id'];
    $product_name = $_POST['pro_name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $qty * $price;
    $current_image = $_POST['current_image'];

    $file = $current_image;

    if(isset($_FILES['file']) && $_FILES['file']['name'] != '') {
        $file = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $path = 'image/'.$file;
        move_uploaded_file($tmp_name, $path);
    }

    $update = "UPDATE tbl_product 
               SET product_name = '$product_name', 
                   qty = '$qty', 
                   price = '$price', 
                   total = '$total', 
                   image = '$file'
               WHERE id = '$id'";
    $execute = mysqli_query($conn, $update);
    if($execute) {
        header('location: table.php');
        exit();
    }

}