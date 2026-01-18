<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <div class="container p-4 shadow mt-4">
        <a href="form.php" class="btn btn-success float-end mb-4">+Add Employee</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Gmail</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the database connection file
                // This brings in the $conn variable from connection.php
                include 'connection.php';

                // SQL query to get ALL records from the tbl_employee table
                // SELECT * means "select all columns"
                $select = "SELECT * FROM tbl_employee";

                // Execute the SQL query on the database connection
                // mysqli_query() sends the query to MySQL and returns the result
                // $ex now holds the result set (all matching rows)
                $ex = mysqli_query($conn, $select);

                // Loop through each row in the result set
                // mysqli_fetch_assoc() gets one row at a time as an associative array
                // The loop continues until there are no more rows (returns false)
                while ($row = mysqli_fetch_assoc($ex)) {

                    // Output HTML table row for each database record
                    // $row['column_name'] accesses each column's value
                    echo '
                        <tr>
                            <td>' . $row['id'] . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['gender'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['position'] . '</td>
                            <td>$ ' . $row['salary'] . '</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="id" value="'. $row['id'] .'">
                                        <button name="deleteBtn" onclick="return confirm(\'Are you sure you want to delete this?\');" class="btn btn-outline btn-danger">Delete</button>
                                    </form>
                                    <a href="formEdit.php?id='.$row['id'].'" class="btn btn-outline btn-warning">Edit</a>
                                </div>
                            </td>
                        </tr>
                        ';
                }
                ?>
                </tr>
            </tbody>
        </table>
    </div>




</body>

</html>