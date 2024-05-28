<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 8</title>
</head>

<body>
    <?php
    $user = 'Ivan';
    if (isset($user))
        echo "Змінна існує";
    else
        echo "Змінна не існує";
    ?>
    <br>
    <?php
    $str = 'sdgsd';
    if (empty($str))
        echo 'Строка пуста';
    else
        echo 'Строка не пуста';
    ?>
    <br>
    <?php
    echo gettype(1.25);
    ?>
    <br>
    <?php
    if (is_int(1.25))
        echo 'Це ціле число';
    else
        echo 'Це не ціле число';
    ?>
</body>

</html>