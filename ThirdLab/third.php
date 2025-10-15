<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
    <form action="thirdLabDisplay.php" method="post">
        <h2>Задание №1</h2>
        <h3>Вариант №11, высокий уровень</h3>
        <p>Задано положительное и отрицательное число в двоичной системе. Составить программу вычисления суммы этих чисел, используя функцию сложения чисел в двоичной системе счисления.</p>
        <label>Первое двоичное число:</label><br>
        <input type="text" name="bin1" required><br><br>
        <label>Второе двоичное число (отрицательное):</label><br>
        <input type="text" name="bin2" required><br><br>
        <input type="submit" value="Сложить">
  </form>
  <br>
  <form action="thirdLabSecTask.php" method="post">
    <h2>Задание №2</h2>
    <h3>Вариант №8</h3>
    <p>n*m=5*5. Тип элементов: вещественный. <br> Задание: Вычислить среднее арифметическое элементов побочной диагонали матрицы</p>
    <table border="1" cellpadding="5" style="border-collapse: collapse;">
        <tr>
            <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[0][0]" placeholder="Число 1" required></label></td>
            <td><label><input type="number" name="matrix[0][1]" placeholder="Число 2" required></label></td>
            <td><label><input type="number" name="matrix[0][2]" placeholder="Число 3" required></label></td>
            <td ><label><input type="number" name="matrix[0][3]" placeholder="Число 4" required></label></td>
            <td  style="background-color:pink"><label><input type="number" name="matrix[0][4]" placeholder="Число 5" required></label></td>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[1][0]" placeholder="Число 6" required></label></td>
            <td><label><input type="number" name="matrix[1][1]" placeholder="Число 7" required></label></td>
            <td><label><input type="number" name="matrix[1][2]" placeholder="Число 8" required></label></td>
            <td  style="background-color:pink"><label><input type="number" name="matrix[1][3]" placeholder="Число 9" required></label></td>
            <td><label><input type="number" name="matrix[1][4]" placeholder="Число 10" required></label></td>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[2][0]" placeholder="Число 11" required></label></td>
            <td><label><input type="number" name="matrix[2][1]" placeholder="Число 12" required></label></td>
            <td  style="background-color:pink"><label><input type="number" name="matrix[2][2]" placeholder="Число 13" required></label></td>
            <td><label><input type="number" name="matrix[2][3]" placeholder="Число 14" required></label></td>
            <td><label><input type="number" name="matrix[2][4]" placeholder="Число 15" required></label></td>
        </tr>
        <tr>
            <td><label><input type="number" name="matrix[3][0]" placeholder="Число 16" required></label></td>
            <td  style="background-color:pink"><label><input type="number" name="matrix[3][1]" placeholder="Число 17" required></label></td>
            <td><label><input type="number" name="matrix[3][2]" placeholder="Число 18" required></label></td>
            <td><label><input type="number" name="matrix[3][3]" placeholder="Число 19" required></label></td>
            <td><label><input type="number" name="matrix[3][4]" placeholder="Число 20" required></label></td>
        </tr>
        <tr>
            <td  style="background-color:pink"><label><input type="number" name="matrix[4][0]" placeholder="Число 21" required></label></td>
            <td><label><input type="number" name="matrix[4][1]" placeholder="Число 22" required></label></td>
            <td><label><input type="number" name="matrix[4][2]" placeholder="Число 23" required></label></td>
            <td><label><input type="number" name="matrix[4][3]" placeholder="Число 24" required></label></td>
            <td><label><input type="number" name="matrix[4][4]" placeholder="Число 25" required></label></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Отправить">
</form>

</body>
</html>