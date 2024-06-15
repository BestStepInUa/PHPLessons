<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 20</title>
</head>

<body>
    <?php
    // $num = 9;
    // if ($num % 2) {
    //     echo "Число {$num} не парне";
    // } else {
    //     echo "Число {$num} парне";
    // }



    // class User
    // {
    //     public $name = 'Oleksandr';
    //     public $age = 38;
    // }

    // $var = new User;
    // $var->age = 39;
    // echo "Name: {$var->name}, age: {$var->age}" . '<br>';

    // if (is_array($var)) {
    //     echo "Це масив";
    // } elseif (is_object($var)) {
    //     echo "Це об’єкт";
    // } elseif (is_string($var)) {
    //     echo "Це строка";
    // } elseif (is_bool($var)) {
    //     echo "Це bool";
    // } else {
    //     echo "Це щось інше";
    // }



    $char = 'ts';

    if ($char == 'php') {
    ?>
        <h1>Мова PHP</h1>
    <?php
    } elseif ($char == "js") {
    ?>
        <h1>Мова JS</h1>
    <?php
    } elseif ($char == "c#") {
    ?>
        <h1>Мова C#</h1>
    <?php
    } else {
    ?>
        <h1>Мова невідома</h1>
    <?php
    }
    ?>
</body>

</html>