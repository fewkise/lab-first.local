<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
    $matrix = $_POST['matrix'];
        foreach ($matrix as &$row) {
            foreach ($row as &$val) {
                if (!is_numeric($val)) {
                    echo "Вы ввели не числа!";
                    return null;
                }
                $val = (int)$val;
            }
        }
        unset($row, $val);

        $sums = [];
        for ($i = 0; $i < 3; $i++) {
            $sums[$i] = array_sum($matrix[$i]);
        }

        $min_sum = min($sums);
        $min_index = array_search($min_sum, $sums);

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $matrix[$i][$j] *= $min_sum;
            }
        }
        echo "<p>Минимальная сумма строки: <b>$min_sum</b> (Строка ".($min_index+1).") >_<</p>";
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
        foreach ($matrix as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td style='text-align: center;'>$val</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

?>
</body>
</html>




