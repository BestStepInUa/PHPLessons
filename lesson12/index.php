<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 12</title>
</head>

<body>
    <?php
    // require 'point.php';
    // $point1 = new Point;
    // $point1->x = 13;
    // $point1->y = 2;
    // echo $point1->x . '<br>';

    // $point2 = new Point();
    // $point2->x = 11;
    // $point2->y = 47;
    // echo $point2->x . '<br>';
    // echo Point::$num . '<br>';

    // $first = $second = 2;
    // $first = 3;
    // echo $first . '<br>' . $second . '<br>';

    // $first_obj = new Point;
    // $first_obj->x = 3;
    // $first_obj->y = 3;

    // $second_obj = $first_obj;
    // $second_obj->x = 5;
    // $second_obj->y = 5;

    // echo "x1: {$first_obj->x}, y1: {$first_obj->y}"
    //     . '<br>';
    // echo "x2: {$first_obj->x}, y2: {$first_obj->y}"
    //     . '<br>';

    $first = 5;
    $second = &$first;
    $second = 3;
    echo $first;
    ?>
</body>

</html>