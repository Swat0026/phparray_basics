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
    function deletevalue($x){
        return (($x!='3'));
    }
    $arr=array('1','2','3','4','5');
    $arr1=array_filter($arr , "deletevalue");

    foreach ($arr1 as  $value) {
        echo $value;

    }


    ?>
    
</body>
</html>