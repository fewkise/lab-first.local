<?php
$x1 = (int)$_POST['x1'];
$y1 = (int)$_POST['y1'];
$x2 = (int)$_POST['x2'];
$y2 = (int)$_POST['y2'];
$text = $_POST['text'];
$color = $_POST['color'];

class Rectangle {
    public $x1, $y1, $x2, $y2;
    function __construct($x1, $y1, $x2, $y2){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }
    function isKvadrat(){
        return abs($this->x2 - $this->x1) === abs($this->y2 - $this->y1);
    }
    function risunok(){
        $x = min($this->x1, $this->x2);
        $y = min($this->y1, $this->y2);
        $width = abs($this->x2 - $this->x1);
        $height = abs($this->y2 - $this->y1);
        return [$x, $y, $width, $height];
    }
}

class RectangleWithText extends Rectangle {
    public $text;
    public $color;
    function __construct($x1, $y1, $x2, $y2, $text, $color){
        parent::__construct($x1, $y1, $x2, $y2);
        $this->text = $text;
        $this->color = $color;
    }
    function perimeterDiagonalProduct(){
        $width = abs($this->x2 - $this->x1);
        $height = abs($this->y2 - $this->y1);
        $perimeter = 2 * ($width + $height);
        $diagonal = sqrt($width * $width + $height * $height);
        echo "Периметр: ".$perimeter."<br>";
        echo "Диагональ: ".round($diagonal, 2)."<br>";
        return $perimeter * $diagonal;
    }
    function drawSVG(){
        echo "Прямоугольник-потомок, 2 задание <br>";
        list($x, $y, $width, $height) = $this->risunok();
        $coords = "({$this->x1}, {$this->y1}, {$this->x2}, {$this->y2})";
        echo $coords;
        $svg = "<svg width='600' height='600' style='border:1px solid #000;'>";
        $svg .= "<rect x='$x' y='$y' width='$width' height='$height' fill='{$this->color}' />";
        $svg .= "<text x='".($x + 5)."' y='".($y + 20)."' fill='black'>{$this->text}</text>";
        $svg .= "</svg>";
        return $svg;
    }
}

$obj = new RectangleWithText($x1, $y1, $x2, $y2, $text, $color);
$proizvedenie = $obj->perimeterDiagonalProduct();

$rect = new Rectangle($x1, $y1, $x2, $y2);
list($x, $y, $width, $height) = $rect->risunok();
if ($rect->isKvadrat()) {
    echo "этот прямоугольник является квадратом";
} else {
    echo "этот прямоугольник не квадрат!!!";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="../style.css"/>
</head>
<body>
<p>Произведение периметра на длину диагонали: <?= round($proizvedenie,2) ?></p>

<?= $obj->drawSVG() ?>

<p>Прямоугольник-родитель</p>
<svg width="600" height="600" style="border:1px solid #000;">
    <rect x="<?= $x ?>" y="<?= $y ?>" width="<?= $width ?>" height="<?= $height ?>" fill="green" />
</svg>

</body>
</html>