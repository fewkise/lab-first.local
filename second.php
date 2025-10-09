<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Задание №1</h1>
    <h3>Вариант 11, высокий уровень (4.1) , стр. 64</h3>
    <p>Дан массив, состоящий из 12 двоичных чисел. Удалить элементы, которые встречаются более 2 раз.</p>
    <form action="secondLabDisplay.php" method="post">
        <p>Массив для примера чтобы не вводить числа вручную: <br> 10101 1000 1000 1000 1010 1111 1011 1 0 1 1 1</p>
        Введите 12 двоичных чисел (через пробел или запятую):<br>
        <input type="text" name="array" size="40" required>
        <br><input type="submit" value="Отправить">
    </form>
    <h1>Задание №2</h1>
    <h3>Вариант 8, высокий уровень (4.2) , стр. 70</h3>
    <p>Дан массив A [3] [3]. Найти строку, сумма элементов которой минимальна и умножить на минимальную сумму каждый элемент матрицы.</p>
    <form action="secondLabSectaskDisplay.php" method="post">
        <table border="1" cellpadding="5" style="border-collapse: collapse;">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[0][0]" placeholder="Число 1" required></label></td>
            <td><label><input type="number" name="matrix[0][1]" placeholder="Число 2" required></label></td>
            <td><label><input type="number" name="matrix[0][2]" placeholder="Число 3" required></label></td>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[1][0]" placeholder="Число 4" required></label></td>
            <td><label><input type="number" name="matrix[1][1]" placeholder="Число 5" required></label></td>
            <td><label><input type="number" name="matrix[1][2]" placeholder="Число 6" required></label></td>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[2][0]" placeholder="Число 7" required></label></td>
            <td><label><input type="number" name="matrix[2][1]" placeholder="Число 8" required></label></td>
            <td><label><input type="number" name="matrix[2][2]" placeholder="Число 9" required></label></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Отправить">
    </form>
</body>
</html>