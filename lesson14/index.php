<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 14</title>
</head>

<body>
    <?php
    // if (define("NUMBER", 1)) {
    //     echo "Константа NUMBER успішно створена і має значення " . NUMBER . "<br>";
    // }
    // if (!define("NUMBER", 4)) {
    //     echo "Константа NUMBER вже створена";
    // }
    // if (defined("NUMBER")) {
    //     echo "Константа NUMBER вже створена";
    // }

    // define("NUMBER", 1);
    // echo constant("NUMBER"); // echo NUMBER;

    // $num = mt_rand(1, 10);
    // $name = "VALUE($num)";
    // echo "Name: {$name} Value: {$num}";
    // define($name, $num);
    // echo constant($name);

    echo "Ім'я файла " . __FILE__ . '<br>';
    echo "Поточна строка " . __LINE__ . '<br>';
    ?>
</body>

</html>