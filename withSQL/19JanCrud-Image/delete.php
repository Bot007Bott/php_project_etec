<?php
require 'connection.php';
if (isset($_POST['btnDelete'])) {
    $id = $_POST['id'];
    $delete = "DELETE FROM tbl_product WHERE id='$id'";
    $execute = $conn->query($delete);
    if($execute) {
        header('location: table.php');
    }
}