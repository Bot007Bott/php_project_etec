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
        // for ($i = 0; $i < 12; $i+=4) {
        //     echo $i."<br>";
        // }

        // $i = 10;
        // while($i >= -2) {
        //     echo $i."<br>";
        //     $i-=4;
        // }

        // $i = 17;
        // do {
        //     echo $i."<br>";
        //     $i-=3;
        // } while ($i > 7);
    ?>

    <?php
        // $users = ["lol", "yoo", 1, 2.5, false, true];
        // // for ($i = 0; $i < count($users); $i++) {
        // //     echo $users[$i]."<br>";
        // // }
        // // echo "<br>";
        // // for each
        // foreach($users as $user) {
        //     echo $user."<br>";
        // }
    ?>

    <?php
        $users = [
            [
                'id'=>1,
                'name'=>'Bot',
                'gender'=>'Male'
            ],
            [
                'id'=>2,
                'name'=>'Heng',
                'gender'=>'Male'
            ],
            [
                'id'=>3,
                'name'=>'Ya',
                'gender'=>'Female'
            ],
            [
                'id'=>4,
                'name'=>'Ro',
                'gender'=>'Female'
            ]
        ];
        // foreach ($users as $user) {
        //     echo "ID: ".$user["id"]." - Name: ".$user["name"]." - Gender: ".$user["gender"]."<br><br>" ;
        // }  

        // echo $users[0]["id"];
        // echo $users[0]["name"];
        // echo $users[0]["gender"];
        for ($i = 0; $i < 4; $i++) {
            echo $users[$i]["id"]." ";
            echo $users[$i]["name"]." ";
            echo $users[$i]["gender"]."<br>";
        }

    ?>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
        </tr>
        <?php
            foreach ($users as $user) {
                echo 
                "<tr>".
                "<td>".$user["id"]."</td>".
                "<td>".$user["name"]."</td>".
                "<td>".$user["gender"]."</td>"
                ."</tr>";
            }
        ?>
    </table>

</body>
</html>