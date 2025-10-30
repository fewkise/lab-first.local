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
    <h2>Задание 3 </h2>
    <h3>Вариант 9, (11.3) </h3>
    <p>Задание: Построить класс 1-го уровня и 2 уровня</p>
    <h4>Поля и функция «качества» (Q ) класса 1-го уровня: </h4>
    <p>Спортсмен: - фамилия; - число соревнований; - сумма мест, занятых спортсменом в соревнованиях. Q = (число соревнований)/ (сумма мест)</p>
    <h4>Поле и функция «качества» Qp класса 2-го уровня:  </h4>
    <p>P- занимал хотя бы раз первое место Qp = 1,5·Q, если Р - истина, иначе – Qp= Q,</p>
    <form action="displayFiveSec.php" method="post">
        Фамилия: <input type="text" name="surname" required><br>
        Число соревнований: <input type="number" name="competitions" required><br>
        Сумма мест: <input type="number" name="sum_places" required><br>
        Было ли 1 место? 
        <select name="first_place" required>
            <option value="1">Да</option>
            <option value="0">Нет</option>
        </select><br>
        <input type="submit" value="Рассчитать">
    </form>
</body>
</html>