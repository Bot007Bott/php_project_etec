<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="p-3">
    <a href="table.php"><i class="fa-solid fa-left-long fs-2"></i></a>
    <div class="container mt-4 p-4 shadow w-50 rounded-2">
        <h2 class="text-center">Form</h2>
        <form action="insert.php" method="post">
            <div class="mb-2">
                <label for="name" class="form-label">Employee Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="" disabled selected>---Select Gender---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="position" class="form-label">Position</label>
                <select name="position" class="form-select">
                    <option value="" disabled selected>---Select Position---</option>
                    <option value="frontend-developer">Frontend Developer</option>
                    <option value="backend-developer">Backend Developer</option>
                    <option value="full-stack-developer">Full Stack Developer</option>
                    <option value="devops-engineer">DevOps Engineer</option>
                    <option value="mobile-developer">Mobile Developer</option>
                    <option value="data-engineer">Data Engineer</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" placeholder="Enter your salary">
            </div>
            <button name="btnSubmit" type="submit" class="btn btn-success d-flex mx-auto">Submit</button>
        </form>
    </div>

</body>

</html>