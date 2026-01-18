<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php
    $username = $_POST["username"] ?? "unknown";
    $gender = $_POST["gender"] ?? "unknown";
    $email = $_POST["email"] ?? "unknown";
    ?>
    <div class="container mt-3 p-4 shadow">
        <table class="table table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    echo "<td>" . $username . "</td>";
                    echo "<td>" . $gender . "</td>";
                    echo "<td>" . $email . "</td>";
                    ?>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>