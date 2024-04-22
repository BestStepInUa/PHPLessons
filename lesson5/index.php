<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 5</title>
</head>

<body>
    <?php
    $asb = 5;
    $Asb = 6;
    $ASB = 7;

    echo $asb;
    echo $Asb;
    echo $ASB;
    ?>
    <br>
    <?php
    echo $asb - 3;
    echo $asb - 2;
    ?>
    <br>
    <?php
    $any = $var = $num = 3;
    echo $any;
    echo $var;
    echo $num;
    ?>
    <br>
    <?php
    $true = true;
    $false = false;
    $int = 10;
    $float = 9.99;
    $str = 'Some string';
    $arr = [1, 2, 3];
    $obj = [
        'name' => 'Oleksandr',
        'age' => 38
    ];
    $img_path = "img/img.jpg";
    $NULL = null;

    var_dump($true);
    ?>
    <br>
    <?php
    var_dump($false);
    ?>
    <br>
    <?php
    echo $int;
    ?>
    <br>
    <?php
    echo $float;
    ?>
    <br>
    <?php
    echo $str;
    ?>
    <br>
    <?php
    print_r($arr);
    ?>
    <br>
    <?php
    var_dump($arr);
    ?>
    <br>
    <?php
    var_dump($obj);
    ?>
    <br>
    <img src="<?php echo $img_path; ?>" alt="Моє зображення PHP">
    <br>
    <?php
    var_dump($NULL);
    ?>
</body>

</html>