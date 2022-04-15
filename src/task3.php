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

    $arr_1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    $arr_2 = array('c2', 'c4');
    foreach ($arr_1 as $key => $value) {
        if($key=='c1'|| $key=='c3' ){
            echo "<br>".$key,"=>",$value;
        }
        
    }
       
    ?>

</body>

</html>