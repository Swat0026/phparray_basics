<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    echo "Recorded Temprature : ";
    foreach ($temperature as $value) {
        echo $value . ",";
    }
    echo "<br>" . "Average Temperature is : ";
    echo array_sum($temperature) / count($temperature);
    echo "<br>";

    sort($temperature);


    echo "List of Five Lowest Temperature : ";
    for ($i = 0; $i < 5; $i++) {
        echo $temperature[$i] . ",";
    }
    echo "<br>";

    rsort($temperature);

    echo "List of Five Highest Temperature : ";
    for ($i = 0; $i < 5; $i++) {
        echo $temperature[$i] . ",";
    }










    ?>

</body>

</html>