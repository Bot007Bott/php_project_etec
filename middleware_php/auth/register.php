<?php include '../page/header.php' ?>
    <a href="../index.php"><i class="fa-solid fa-arrow-left fs-5"></i></a>
    <div class="container mt-4 p-5 shadow rounded-3 w-50">
        <h2 class="text-center">Register</h2>
        <form action="" method="post">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" id="username" class="form-control" placeholder="Enter Your Username...">
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email...">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password...">
            </div>
            <p class="text-center">Already have an account?&emsp13;<a href="login.php">Login</a></p>
            <button class="btn btn-primary d-flex mx-auto">Register</button>
        </form>
    </div>
<?php include '../page/footer.php' ?>
