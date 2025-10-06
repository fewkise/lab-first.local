<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
        <h1>Задача №1</h1>
    <h3>Вариант 14, высокий уровень (1.2), стр.14</h3>
    <p>Окружность вписана в квадрат заданной площади. Найти площадь
квадрата, вписанного в эту окружность. Во сколько раз площадь
вписанного квадрата меньше площади заданного?</p>
    <form action="display.php" method="post">
        <p>Введите площадь:<label>
                <input type="number" name="sq"/>
            </label>
            <input type="submit" value="Отправить">
    </form>
    <form action="secondDisplay.php" method="post">
        <h1>Задача №2</h1>
        <h3>Вариант 16, высокий уровень (2.2), стр. 30</h3>
        <p>Дано четырехзначное число. Определить: а) равна ли сумма двух первых
его цифр сумме двух последних; б) кратна ли 7 сумма его цифр.</p>
        <p>Введите число:<label>
                <input type="number" name="mas1"/>
            </label>
            <input type="submit" value="Отправить">
        </p>
    </form>
    <form action="thirdDisplay.php" method="post">
        <h1>Задача №3</h1>
        <h3>Вариант 20, высокий уровень (3.2), стр. 48</h3>
        <p>Дано натуральное число n (n<9999) и число m. Найти сумму m-последних
цифр числа n.</p>
        <p>Введите число n: (<9999)<label>
                <input type="number" name="num1"/>
            </label>
        <p>Введите число m:<label>
                <input type="number" name="num2"/>
            </label>
            <input type="submit" value="Отправить">
        </p>
    </form>
</body>
</html>