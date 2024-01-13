<?php
session_start();
$currentTime = date('Y-m-d H:i:s');

// Получение входных данных
if(!isset($_GET['X']) || !isset($_GET['Y']) || !isset($_GET['R'])) {
    header('Location: index.php');
    exit();
}
$X = floatval($_GET['X']);
$Y = floatval($_GET['Y']);
$R = floatval($_GET['R']);
if($X != -3 && $X != -2 && $X != -1 && $X != 0 && $X != 1 && $X != 2 && $X != 3 && $X != 4 && $X != 5) {
    header('Location: index.php');
    exit();
}
if($Y < -5 || $Y > 5) {
    header('Location: index.php');
    exit();
}
if($R != 1 && $R != 1.5 && $R != 2 && $R != 2.5 && $R != 3) {
    header('Location: index.php');
    exit();
}

// Вычисление результата
$result = ($X >= 0 && $Y >= 0 && (-$X + $R / 2 >= $Y)) ||
          ($X <= 0 && $Y >= 0 && ($X > -$R && $Y <= $R / 2)) ||
          ($X >= 0 && $Y <= 0 && ($X * $X + $Y * $Y <= $R * $R / 4));

// Вычисление времени выполнения скрипта
$executionTime = round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 4);

// Сохранение результатов
$resultLine = "<tr>
                <td>$X</td>
                <td>$Y</td>
                <td>$R</td>
                <td>" . ($result ? 'Попадание' : 'Непопадание') . "</td>
                <td>$currentTime</td>
                <td>$executionTime сек.</td>
              </tr>";
$_SESSION['results'][] = $resultLine;

// Перенаправление на главную страницу
header("Location: index.php");
exit();
?>