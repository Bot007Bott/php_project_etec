<?php
try {
    $conn = mysqli_connect("localhost", "root", "", "db_php_2-3", 3306);
} catch (Exception $e) {
    echo $e->getMessage();
}
