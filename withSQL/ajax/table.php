<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="container mt-5 p-4 shadow rounded-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark mb-4 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Add Student
        </button>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Dara</td>
                    <td>Male</td>
                    <td>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG5MFQeQueZnq67u1pk5ltllNKsT3WI3WZpQU1SAj1253E-c5p2PdngCUWxkx0hL889fxM0Bbz9UVsj4LeCykHkIVVFpe4WzjiF989LA&s=10" width="40" height="40" class="rounded-circle" alt="">
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                        <button type="button" class="btn btn-outline-warning">Edit</button>
                    </td>
                </tr>
            </tbody>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="insert.php" method="post" enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter your Username" required>
                                </div>
                                <div class="mb-2">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" id="" class="form-select" required>
                                        <option value="" selected disabled>---Gender---</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="file" class="form-label">Profile</label>
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>

        </table>
    </div>
</body>

</html>