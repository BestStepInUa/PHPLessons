<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Урок 2'; ?></title>
</head>

<body>
    <?php
    echo 'Поточна дата та час: ';
    echo date(DATE_RSS);
    ?>
    <br>
    <?php
    echo 9 + 3 - 4;
    echo 'Text';
    ?>
    <br>
    <?php
    if (mt_rand(0, 1)) {
    ?>
        <div style='color:blue'>Синій колір</div>
    <?php
    } else {
    ?>
        <div style='color:red'>Червоний колір</div>
    <?php
    }
    ?>
</body>

</html>