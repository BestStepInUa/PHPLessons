<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 15</title>
</head>

<body>
    <?php
    // echo 'Абсолютний шлях до файлу: ' . __DIR__ . '<br>';
    // require_once __DIR__ . '/../lesson13/point.php';

    // $p1 = new Point;
    // $p1->x = 10;
    // $p1->y = 34;

    // $p2 = new Point;
    // $p2->x = 3;
    // $p2->y = 10;

    // $distance = sqrt(pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2));

    // echo $distance;

    class ConstClass
    {
        const NAME = "str";
    }
    if (defined('ConstClass::NAME')) {
        echo 'Константа визначена';
    } else {
        echo 'Константа не изначена';
    }
    ?>
</body>

</html>