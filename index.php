<?php
    session_start();
    $results = isset($_SESSION['results']) ? $_SESSION['results'] : array();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
        <title>Лабораторная работа 1</title>
    </head>
    <body>
        <header id="page-header">
            <h1>Андриянова Софья, P3230, 1100</h1>
        </header>
        <main id="page-content">
            <form id="main-form" onsubmit="return validateForm()" action="process.php" method="GET">
                <label for="inputX">X:</label>
                <input type="text" id="inputX" name="X" hidden value="-4">
                <div id="x-buttons" class="buttons">
                    <button type="button" onclick="setX(-3)">-3</button>
                    <button type="button" onclick="setX(-2)">-2</button>
                    <button type="button" onclick="setX(-1)">-1</button>
                    <button type="button" onclick="setX(0)">0</button>
                    <button type="button" onclick="setX(1)">1</button>
                    <button type="button" onclick="setX(2)">2</button>
                    <button type="button" onclick="setX(3)">3</button>
                    <button type="button" onclick="setX(4)">4</button>
                    <button type="button" onclick="setX(5)">5</button>
                </div>
                <label for="inputY">Y:</label>
                <input type="text" id="inputY" name="Y" placeholder="0" required>
                <label for="inputR">R:</label>
                <input type="text" id="inputR" name="R" hidden value="0">
                <div id="r-buttons" class="buttons">
                    <button type="button" onclick="setR(1)">1</button>
                    <button type="button" onclick="setR(1.5)">1.5</button>
                    <button type="button" onclick="setR(2)">2</button>
                    <button type="button" onclick="setR(2.5)">2.5</button>
                    <button type="button" onclick="setR(3)">3</button>
                </div>
                <input type="submit" value="Отправить">
            </form>
            <table id="data-table">
                <thead>
                    <tr>
                        <th>Координата X</th>
                        <th>Координата Y</th>
                        <th>Радиус R</th>
                        <th>Результат</th>
                        <th>Время запроса</th>
                        <th>Время выполнения скрипта</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($results as $result) {
                            echo $result;
                        }
                        ?>
                </tbody>
            </table>
        </main>
    </body>
</html>