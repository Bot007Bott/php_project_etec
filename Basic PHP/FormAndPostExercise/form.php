<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4 p-4 shadow w-50">
        <h1>Form</h1>
        <form action="data.php" method="post">
            <div class="mb-2">
                <label for="name" class="form-label">Username</label>
                <input name="username" id="username" type="text" class="form-control" placeholder="Enter your username">
            </div>
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="" disabled selected>--- other ---</option>
                    <option value="male">Male</option>
                    <option value="female" >Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <input type="submit" class="btn btn-warning">
            </div>
        </form>
    </div>
</body>
</html>