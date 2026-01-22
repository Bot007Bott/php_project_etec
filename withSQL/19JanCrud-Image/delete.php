<?php
require 'connection.php';
if (isset($_POST['btnDelete'])) {
    $id = $_POST['id'];
    $delete = "DELETE FROM tbl_product WHERE id='$id'";
    $execute = $conn->query($delete);
    if($execute) {
        // header('location: table.php');
        echo '<script>window.location.href="table.php"</script>';
    }
}