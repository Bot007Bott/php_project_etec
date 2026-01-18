<?php
include 'connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM tbl_employee WHERE id='$id'";
$rs = $conn->query($select);
$row = mysqli_fetch_assoc($rs);
?>

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
        <h2 class="text-center">Form Edit / Update</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="mb-2">
                <label for="name" class="form-label">Employee Name</label>
                <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="" disabled>--Select Gender---</option>
                    <option value="male" <?= $row['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
                    <option value="female" <?= $row['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="position" class="form-label">Position</label>
                <select name="position" class="form-select">
                    <option value="" disabled>--Select Position--</option>
                    
                    <!-- <option value="frontend-developer" <?= $row['position'] == 'frontend-developer' ? 'selected' : '' ?>>Frontend Developer</option>
                    <option value="backend-developer" <?= $row['position'] == 'backend-developer' ? 'selected' : '' ?>>Backend Developer</option>
                    <option value="full-stack-developer" <?= $row['position'] == 'full-stack-developer' ? 'selected' : '' ?>>Full Stack Developer</option>
                    <option value="devops-engineer" <?= $row['position'] == 'devops-engineer' ? 'selected' : '' ?>>DevOps Engineer</option>
                    <option value="mobile-developer" <?= $row['position'] == 'mobile-developer' ? 'selected' : '' ?>>Mobile Developer</option>
                    <option value="data-engineer" <?= $row['position'] == 'data-engineer' ? 'selected' : '' ?>>Data Engineer</option> -->

                    <?php
                    // Define all positions in an array
                    $positions = [
                        'frontend-developer' => 'Frontend Developer',
                        'backend-developer' => 'Backend Developer',
                        'full-stack-developer' => 'Full Stack Developer',
                        'devops-engineer' => 'DevOps Engineer',
                        'mobile-developer' => 'Mobile Developer',
                        'data-engineer' => 'Data Engineer'
                    ];

                    // Loop through each position
                    foreach ($positions as $value => $label) {
                        // Check if this position matches the employee's current position
                        $selected = ($row['position'] == $value) ? 'selected' : '';

                        // Output the option element
                        echo "<option value='$value' $selected>$label</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" value="<?= $row['salary'] ?>" placeholder="Enter your salary">
            </div>
            <button name="btnUpdate" type="submit" class="btn btn-success d-flex mx-auto">Update</button>
        </form>
    </div>

</body>

</html>