<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <form action="condition2.php" method="get" style="margin: 20px 0 0 20px;">
        Score 1 : <input type="number" name="score1"> <br><br>
        Score 2 : <input type="number" name="score2"> <br><br>
        Score 3 : <input type="number" name="score3"> <br><br>
        Score 4 : <input type="number" name="score4"> <br><br>
        Score 5 : <input type="number" name="score5"> <br><br>
        <input type="submit">
    </form> <br>

    <?php
        $score1 = $_GET["score1"] ?? 0;
        $score2 = $_GET["score2"] ?? 0;
        $score3 = $_GET["score3"] ?? 0;
        $score4 = $_GET["score4"] ?? 0;
        $score5 = $_GET["score5"] ?? 0;
        $total = $score1 + $score2 + $score3 + $score4 + $score5;
        $avg = $total / 5;
        $grade;
        if ($avg >= 90 && $avg <= 100) {
            $grade = 'A';
        } elseif ($avg >= 80) {
            $grade = 'B';
        } elseif ($avg >= 70) {
            $grade = 'C';
        } elseif ($avg >= 60) {
            $grade = 'D';
        } elseif ($avg >= 50) {
            $grade = 'E';
        } else {
            $grade = 'F';
        }
    ?>

    <table class="table table-striped table-warning text-center">
        <tr>
            <th>Score1</th>
            <th>Score2</th>
            <th>Score3</th>
            <th>Score4</th>
            <th>Score5</th>
            <th>Total</th>
            <th>Average</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td><?php echo $score1; ?></td>
            <td><?php echo $score2; ?></td>
            <td><?php echo $score3; ?></td>
            <td><?php echo $score4; ?></td>
            <td><?php echo $score5; ?></td>
            <td><?php echo $total; ?></td>
            <td><?php echo $avg; ?></td>
            <td><?php echo $grade; ?></td>
        </tr>
    </table>

    <?php
        $n1 = 10;
        $n2 = 15;
        ($n1 > $n2) ? $a = 10 : $a = 15;
        echo $a;
    ?>
</body>
</html>