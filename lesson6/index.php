<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 6</title>
</head>

<body>
    <?php
    $num = 1234;
    $num = +1234;
    $num = -12;
    $num = 012;
    $num = 0x12A;
    echo $num;
    ?>
    <br>
    <?php
    echo 07 + 03;
    ?>
    <br>
    <?php
    echo 0xA + 0xF;
    ?>
    <br>
    <?php
    $var1 = 1.23456e-3;
    $var2 = 1.23456e3; // $var2 = 1.23456e+3;
    echo $var1;
    ?>
    <br>
    <?php
    echo $var2;
    ?>
</body>

</html>