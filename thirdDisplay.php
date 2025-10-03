<?php
    echo "<h1>Задача №3 20 вариант, высокий уровень, 3.2</h1>";
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $array = [0];
    for($i=0;$i<$num2;$i++){
        array_push($array,$i);
    }
    if (strlen($num1)<1){
        echo "вы не ввели число n !<br/>";
    }
    if (strlen($num2)<1){
        echo "вы не ввели число m !<br/>";
    }
    if(strlen($num2)>strlen($num1)){
        echo "вы ввели m больше длинны n >_<";
    } else {
        $b=0;
        for($i = 1; $i<count($array); $i++){
            $b=$num1[-$i] + $b;
        }
        echo "Сумма последних ".$num2."-х чисел числа ".$num1." равна: <b> ".$b."</b><h1>:)</h1>";
    }