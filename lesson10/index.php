<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 10</title>
</head>

<body>
    <?php
    $tests = array(
        '42',
        1337,
        0x539,
        02471,
        0b10100111001,
        1337e0,
        '0x539',
        '02471',
        '0b10100111001',
        '1337e0',
        'not numeric',
        array(),
        9.1,
        null
    );

    foreach ($tests as $element) {
        if (is_numeric($element)) {
            echo var_export($element, true) . ' - число', PHP_EOL . '<br>';
        } else {
            echo var_export($element, true) . ' - НЕ  число', PHP_EOL . '<br>';;
        }
    }
    ?>
    <br>
    <br>
    <br>
    <?php
    echo decbin(5);
    ?>
    <br>
    <?php
    echo round(21.13413213213213212, 2);
    ?>
    <br>
    <?php
    echo ceil(4.1);
    ?>
    <br>
    <?php
    echo ceil(9.999);
    ?>
    <br>
    <?php
    echo ceil(-3.14);
    ?>
    <br>
    <?php
    echo floor(-3.14);
    ?>
    <br>
    <?php
    echo floor(9.999);
    ?>
    <br>
    <?php
    echo floor(4.3);
    ?>

</body>

</html>