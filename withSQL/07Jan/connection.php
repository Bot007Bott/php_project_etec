<?php 
// Establish a connection to the MySQL database
// mysqli_connect() creates a connection and returns a connection object

// Parameters:
// 1. "localhost" - the server where MySQL is running (same computer)
// 2. "root" - the MySQL username (default username for local development)
// 3. "" - the password (empty string means no password)
// 4. "db_php_2-3" - the name of the database to connect to

$conn = mysqli_connect("localhost","root","","db_php_2-3");

// Commented out code below would test if connection succeeded:
// if ($conn) {
//     // If $conn is truthy (connection successful), display success message
//     echo "connected successfully!";
// } else {
//     // If $conn is false (connection failed), display error message
//     echo "db connected unsuccessfully!";
// }

// The $conn variable is now available to be used in other files via include
?>