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
    $input = $_POST['array']; 
    $arr = preg_split('/[\s,]+/', trim($input));
    if (count($arr) !== 12) {
        echo "Введите ровно 12 двоичных чисел.";
        return null;
    }
    $counts = array_count_values($arr);
    $result = array_filter($arr, function($value) use ($counts) {
        return $counts[$value] <= 2;
    });
    echo "Исходный массив: >.<" . implode(', ', $arr)."<br>";
    echo "Результат (удалены числа, встречающиеся более 2 раз): ".implode(', ', $result);

?>
</body>
</html>

