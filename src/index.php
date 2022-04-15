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
       $original_arr=array('1','2','3','4','5');
       echo "Old Array Value : ";
       foreach ($original_arr as $value) {
           echo $value;
       }
       echo "<br>";
       $new_item_to_insert='$';
       $position_to_insert=3;
       array_splice($original_arr,$position_to_insert,0,$new_item_to_insert);
       echo "New Array Value : ";
       foreach ($original_arr as $value) {
           echo $value;
       }


        
    ?>

</body>

</html>