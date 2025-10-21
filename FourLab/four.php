<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
<form method="post">
    <h2>Задание №1</h2>
    <h3>Вариант 14</h3>
    <p>Пользователь вводит пароль. Определите уровень сложности пароля (разработать алгоритм определения сложности по 10 балльной шкале).</p>
    Введите пароль: <input type="text" name="password">
    <input type="submit" value="Проверить">
    <?php
    if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $score=0;
    $length = mb_strlen($password);
    $all_same = true;
    if ($length > 0) {
        $first_char = mb_substr($password, 0, 1);
        for ($i = 1; $i < $length; $i++) {
            if (mb_substr($password, $i, 1) !== $first_char) {
                $all_same = false;
                break;
            }
        }
    } else {
        $all_same = false; 
        $score = 0;
        echo "<br>"."пустой пароль! >.<";
    }
    if ($all_same) {
        $score = 1;
    } else {
    if($length >=5){
        $score +=2;
    } else {
        $score +=1;
    }
    $has_upper = false;
    for ($i = 0; $i <$length; $i++){
        $char = mb_substr($password, $i, 1);
        if ($char>= 'A' && $char <= 'Z'){
            $has_upper=true;
            break;
        }
    }
    $has_chars = false;
    for ($i = 0; $i <$length; $i++){
        $chars = mb_substr($password, $i, 1);
        if ($chars>= 'a' && $chars <= 'z'){
            $has_chars =true;
            break;
        }
    }
    $has_ciclo = false;
    for ($i = 0; $i <$length; $i++){
        $ciclo = mb_substr($password, $i, 1);
        if ($ciclo>= '0' && $ciclo <= '9'){
            $has_ciclo=true;
            break;
        }
    }

    $special_chars = "!@#$%^&*_";
    $has_special = false;
    for ($i=0; $i < $length; $i++) {
        $char = mb_substr($password, $i, 1);
        $pos = mb_strpos($special_chars, $char);
        if ($pos !== false) {
            $has_special = true;
            break;
        }
    }
    if ($length > 10) $score += 1;
    if ($has_ciclo || $has_chars || $has_special || $has_upper) $score +=1;
    if ($has_ciclo && $has_chars) $score +=2;
    if ($has_ciclo && $has_chars && $has_special && $has_upper) $score +=4;
    }
    echo "<p>Ваш пароль: <b>" .($password) . "</b></p>";
    echo "<p>Уровень сложности пароля (0-10): <b>$score</b></p>";
}
    ?>
</form>
<h2>Задание №2</h2>
<p>Создать форму авторизации на сайте с тремя обязательных полями: login, password и email. Если данные введены верно, то записать в cookies специальный ключ, при наличии которого пользователю доступна кнопка  “Выход”. В момент выхода происходит удаление созданной ранее cookies.</p>
<p>Данные для входа: <br> логин: user <br> пароль: 123 <br> почта: user@example.com</p>
<?php
    session_start();
    $login_correct = "user";
    $password_correct = "123";
    $email_correct = "user@example.com";

    if(isset($_GET['logout'])) {
    setcookie("auth", "", time() - 3600);
    echo "вы вышли из системы, куки очищены";
} else if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $login = $_POST["login"] ?? "";
    $password = $_POST["password"] ?? "";
    $email = $_POST["email"] ?? "";
    if ($login === $login_correct && $password === $password_correct && $email === $email_correct){
        setcookie("auth", "logged_in", time() +3600);
        echo "<p> вы вошли в систему!! >.< </p>";
        echo '<p><a href="?logout=1">выход</a></p>';
    } else {
        echo "неверные данные для входа!!!";
        showForm();
    }
} else {
    if (isset ($_COOKIE["auth"])){
        echo "<p> вы вошли в систему. </p>";
        echo '<p><a href="?logout=1">выход</a></p>';
    } else {
        showForm();
    }
}
function showForm () {
    echo <<<FORM
    <form method="POST">
    <input type="text" name="login" placeholder="Логин" required><br><br>
    <input type="password" name="password" placeholder="Пароль" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <button type="submit">Войти</button>
    </form>
    FORM;
}

    ?>
    <h2>Задание 3</h2>
    <p>Написать счетчик посещений страницы по уникальным ip. Показывать статистику за сегодня, за неделю</p>
<?php
$file = __DIR__ . '/visits.txt';

$ip = $_SERVER['REMOTE_ADDR'];
$today = date('Y-m-d');
$weekAgo = date('Y-m-d', strtotime('-6 days'));
$data = [];
if (file_exists($file)) {
    $lines = file($file);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '') continue;
        $parts = explode('|', $line);
        if (count($parts) === 2) {
            $data[] = ['date' => $parts[0], 'ip' => $parts[1]];
        }
    }
}

$alreadyCounted = false;
foreach ($data as $entry) {
    if ($entry['date'] === $today && $entry['ip'] === $ip) {
        $alreadyCounted = true;
        break;
    }
}

if (!$alreadyCounted) {
    $f = fopen($file, 'a');
    fwrite($f, $today.'|'.$ip."\n");
    fclose($f);
    $data[] = ['date' => $today, 'ip' => $ip];
}

$uniqToday = [];
$uniqWeek = [];

foreach ($data as $entry) {
    if ($entry['date'] === $today) {
        $uniqToday[$entry['ip']] = true;
    }
    if ($entry['date'] >= $weekAgo && $entry['date'] <= $today) {
        $uniqWeek[$entry['ip']] = true;
    }
}

echo "Уникальных ip за сегодня: ".count($uniqToday) . "<br>";
echo "Уникальных ip за неделю: ".count($uniqWeek) . "<br>";
echo "ваш ip ". $ip;
?>

</body>
</html>