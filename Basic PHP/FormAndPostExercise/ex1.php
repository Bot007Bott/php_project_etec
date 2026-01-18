<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container w-50 p-3 shadow mt-3">
        <form action="ex1.php" method="post">
            <div class="mb-2">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="email" name="email" placeholder="Enter Email" class="form-control" id="email">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" name="password" placeholder="Enter Password" class="form-control" id="password">
            </div>
            <div class="mb-5">
                <label for="confirmPassword" class="form-label"><b>Confirm Password</b></label>
                <input type="password" name="confirmPassword" placeholder="Repeat Password" class="form-control" id="confirmPassword">
            </div>
            <div class="mb-2">
                <span>
                    <p>By creating an account you agree to our <a href="#">Terms & privacry</a>. </p>
                </span>
            </div>
            <div class="mb-2 d-flex justify-content-center">
                <button name="btnSubmit" class="btn btn-success w-100" style="border-radius: 0; height:60px">Register</button>
            </div>
        </form>
    </div>
    <div class="container w-70 mt-4 d-flex justify-content-center">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
    <div class="container w-50 p-3 shadow mt-3">
        <?php
        if (isset($_POST["btnSubmit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];

            if ($password === $confirmPassword) {
                echo "<table class='table table-hover table-striped'>
                        <thead class='table-dark'>
                            <tr>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Confirm Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>".$email."</td>
                                <td>".$password."</td>
                                <td>".$confirmPassword ."</td>
                            </tr>
                        </tbody>
                    </table>";
            } else {
                echo "<center><h3 style='color: red;'>Password And Confirm Password aren't the same.</h3></center>";
            }
        }
        ?>

    </div>


</body>

</html>