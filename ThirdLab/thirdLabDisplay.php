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
$numBin1 = $_POST['bin1'];
$numBin2 = $_POST['bin2'];

function binarySum($numBin1, $numBin2) {
    $result = "";
    $razryad = 0;
    $i = strlen($numBin1) - 1;
    $j = strlen($numBin2) - 1;
    while ($i >= 0|| $j >= 0|| $razryad) {
    $sum = $razryad;
    if ($i >= 0) {
        $sum += (int)($numBin1[$i]);
        $i--;
    }
    if ($j >= 0) {
    $sum += (int)($numBin2[$j]);
    $j--;
    }
    $result = ($sum % 2).$result;  
    if ($sum >= 2) {
    $razryad = 1;
    } else {
    $razryad = 0;
    }
    }
    return $result;
}

echo binarySum($numBin1, $numBin2);
?>
</body>
</html>