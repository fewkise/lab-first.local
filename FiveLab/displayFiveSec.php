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
$surname = $_POST['surname'];
$competitions = $_POST['competitions'];
$sum_places = $_POST['sum_places'];
$p = ($_POST['first_place'] == '1') ? true : false;

class Sportsman{
    private $surname;
    private $competitions;
    private $sum_places;
    function __construct($surname, $competitions, $sum_places){
        $this->surname = $surname;
        $this->competitions = $competitions;
        $this->sum_places = $sum_places;
    }
    function getQ(){
        return $this->sum_places != 0 ? $this->competitions / $this->sum_places : 0;
    }
    function getSurname(){
        return $this->surname;
    }
}
class Winner extends Sportsman{
    private $p;
    function __construct($surname, $competitions, $sum_places, $p){
        parent::__construct($surname, $competitions, $sum_places);
        $this->p = $p;
    }
    function getQp(){
        $Q = $this->getQ();
        if ($this->p) {
            return 1.5 * $Q;
        }
        return $Q;
    }
}
$sportsman = new Winner($surname, $competitions, $sum_places, $p);

echo "Фамилия: ".$sportsman->getSurname()."<br>";
echo "Q = (число соревнований) / (сумма мест) = ". $competitions ." / ".$sum_places." = ". $sportsman->getQ()."<br>";
echo "P (занимал ли 1 место): ".($p ? "Да" : "Нет")."<br>";
echo "Qp = " . $sportsman->getQp()."<br>";
?>
</body>
</html>

