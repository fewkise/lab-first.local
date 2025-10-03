<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Задача №1</h1>
    <h3>Вариант 14, высокий уровень (1.2)</h3>
    <form action="display.php" method="post">
        <p>Введите площадь:<label>
                <input type="number" name="sq"/>
            </label>
            <input type="submit" value="Отправить">
    </form>
    <form action="secondDisplay.php" method="post">
        <h1>Задача №2</h1>
        <h3>Вариант 16, высокий уровень (2.2)</h3>
        <p>Введите число:<label>
                <input type="number" name="mas1"/>
            </label>
            <input type="submit" value="Отправить">
        </p>
    </form>
    <form action="thirdDisplay.php" method="post">
        <h1>Задача №3</h1>
        <h3>Вариант 20, высокий уровень (3.2)</h3>
        <p>Введите число n: (>9999)<label>
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
