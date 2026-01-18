<?php
include 'connection.php';

// Check if the form was submitted
// isset() checks if the variable exists
// $_POST is a superglobal array that contains form data sent via POST method
// This if statement only runs when the "Submit" button was clicked
if (isset($_POST["btnSubmit"])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $salary = $_POST["salary"];

    // Create SQL INSERT query
    // This query adds a new row to the tbl_employee table
    // Column names are in the first parentheses
    // Values are in the second parentheses (wrapped in single quotes for strings)
    $insert = "INSERT INTO tbl_employee (name,gender,email,position,salary)
    VALUES ('$name','$gender','$email','$position','$salary')";

    // Execute the INSERT query on the database
    // mysqli_query() sends the SQL command to MySQL
    // Returns true if successful, false if failed
    $execute = mysqli_query($conn, $insert);


    // Check if the query executed successfully
    if ($execute) {
        // Redirect back to the form page
        // header('location: ...') sends the browser to a different page
        // This refreshes the page so the new employee appears in the table
        header('location: form.php');
    }
    // Note: No else statement, so if insert fails, nothing happens (not ideal!)
}
