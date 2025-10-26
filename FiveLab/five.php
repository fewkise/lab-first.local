<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
    <h2>Задание 1, 2 (второе - это класс потомок) </h2>
    <h3>Вариант 9, (11.1, 11.2) средний уровень (макс.), стр 189</h3>
    <p>Задание: создать класс с полями, указанными в индивидуальном задании.</p>
    <h4>Класс-родитель и его поля: </h4>
    <p>Координаты изображения прямоугольника: x1, y1, x2, y2</p>
    <p>Функция-метод 1 обработки данных <br>Определить, является ли прямоугольник квадратом?</p>
    <p>Функция-метод 2 обработки данных <br>Изобразить прямоугольник на форме (Image), закрашенный зеленым цветом</p>
    <h4>Класс-потомок и его поля:</h4>
    <p>Поле класса потомка: <br> Изображение закрашенного прямоугольника с текстом: координаты прямоугольника, заданный текст, цвет закрашивания</p>
    <p>Функция обработки данных: <br>Произведение периметра и длины диагонали прямоугольника в пикселях.</p>
    <form action="displayFive.php" method="post">
        <label>Координата x1:  <input type="number" name="x1" required></label><br>
        <label>Координата y1: <input type="number" name="y1" required></label><br>
        <label>Координата x2:  <input type="number" name="x2" required></label><br>
        <label>Координата y2: <input type="number" name="y2" required></label><br>
        <label>Текст: <input type="text" name="text" required></label><br>
        <label>Цвет: <input type="text" name="color" value="green" required></label><br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>