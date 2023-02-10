<?php
$userName = 'MDAAMAX'; # поменять
$result = 2 + 2; # поменять
$githubLink = 'https://github.com/mdaamax'; # поменять
$color = "черный"
# сделать переменную для любимого цвета
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./style.css">
        <title>Занятие 1</title>
    </head>
    <body>
        <div class="card">
            <h1>Добро пожаловать, <?php echo $userName; ?></h1> <!--поменять-->
            <p>
                Мой любимый цвет: <?php echo $color; ?> <!--сделать цвет через переменную, выбрать свой-->
            </p>
            <p>Напоминаю, 2*2 будет <?php echo $result; ?></p> <!--тут НЕ менять-->
            <p>
                А вот и ссылка на мой
                <a href="<?= $githubLink ?>">гитхаб</a> <!--тут НЕ менять-->
                (вау!)
            </p>
        </div>
    </body>
</html>
