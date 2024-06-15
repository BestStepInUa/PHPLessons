<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 22</title>
</head>

<body>
    <?php
    $x = -450;
    $x = $x < 0 ? -$x : $x;
    echo $x;

    echo '<br>';

    $num = -5;
    echo ($num > 0 ? 'Число більше 0' : 'Число дорівнює або менше 0');

    echo '<br>';

    $n = 0;
    finish:
    $y = null;
    $y = $y ?? 11;
    echo $y;
    echo $n;
    $n++;
    echo $n;
    if ($n > 6) {
        goto end;
    }

    echo '<br>';

    goto finish;
    end:
    ?>
</body>

</html>