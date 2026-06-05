<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $emp=array(
            array(1, "raj", 400000),
            array(2, "jay", 500000),
            array(3, "kartik", 300000),
        );
        for($row=0;$row<3;$row++){
            for($col=0;$col<3;$col++){
                echo $emp [$row][$col]."  ";
            }
            echo"<br>";
        }
    ?>
</body>
</html>