<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 23</title>
</head>

<body>
    <?php
    $char = 'c++';
    switch ($char) {
        case 'php':
    ?>
            <h1>Мова PHP</h1>
        <?php
            break;
        case 'js':
        ?>
            <h1>Мова JavaScript</h1>
        <?php
            break;
        case 'c#':
        ?>
            <h1>Мова C#</h1>
        <?php
            break;
        default:
        ?>
            <h1>Мова невідома</h1>
    <?php
            break;
    }

    $number = -7;
    switch (true) {
        case ($number > 0 && $number < 10):
            echo "$number менше 10 і більше 0";
            break;
        case ($number > 10 && $number < 100):
            echo "$number менше 100 і більше 10";
            break;
        case ($number > 100 && $number < 1000):
            echo "$number менше 1000 і більше 100";
            break;
        default:
            echo "$number більше або рівне 1000 і менше або рівне 0";
            break;
    }
    ?>
</body>

</html>