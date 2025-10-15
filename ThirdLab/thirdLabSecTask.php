<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
    <?php
    $matrix = $_POST['matrix'];
    function countAverage ($matrix){
        $n=count($matrix);
        $sum=0.0;
        for ($i=0; $i<$n; $i++){
            $sum += (float)$matrix[$i][$n - 1 - $i];
        }
        return $sum/$n;
    }
    $result=countAverage($matrix);
    echo "Среднее арифметическое побочной диагонали (по середине слева снизу на право) матрицы равно ".$result;
    ?>
</body>
</html>