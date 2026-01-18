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
        $id1 = 001;
        $name1 = "Vanenteakbot";
        $gender1 = "Male";

        $id2 = 002;
        $name2 = "Yin";
        $gender2 = "Female";
    ?>
    <div class="container">
        <table class="table table-striped table-hover text-center"> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php
                    echo "<td>".$id1."</td>";
                    echo "<td>".$name1."</td>";
                    echo "<td>{$gender1}</td>";
                ?>
                <td>
                    <button class="btn btn-outline-danger">Delete</button>
                    <button class="btn btn-outline-warning">Edit</button>
                </td>
            </tr>
            <tr>
                <?php
                    echo "<td>".$id2."</td>";
                    echo "<td>".$name2."</td>";
                    echo "<td>{$gender2}</td>";
                ?>
                <td>
                    <button class="btn btn-outline-danger">Delete</button>
                    <button class="btn btn-outline-warning">Edit</button>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>


<!-- day1 -->
<?php
    // echo "Name: Vanenteakbot"."<br>";
    // echo "Age: 20 <br>";
    // echo "Gender: M <br>";
    // echo "Email: bot@gmail.com <br>";
    // echo "Phone number: 098725588<br>";
    // echo "Address: Phnom Penh<br>";
?>