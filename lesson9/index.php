<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 9</title>
</head>

<body>
    <?php
    $str = '45.2';
    $number = $str - 12;
    echo $number;
    ?>
    <br>
    <?php
    $var = [];
    if ($var) {
        echo 'Змінна $var розглядається як true';
    } else {
        echo 'Змінна $var розглядається як false';
    }
    ?>
    <br>
    <?php
    echo false;
    echo true;
    ?>
    <br>
    <?php
    $float = 4.3;
    $int = (int)$float;
    echo $int;
    ?>
    <br>
    <?php
    $num = 21;
    $f = (float)($num / 2) - (int)($num / 2);
    if ($f) {
        echo 'Число непарне';
    } else {
        echo 'Число парне';
    }
    ?>
</body>

</html>