<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $may_salary=array(1200,1500,2000);
        $june_salary=array(1000,1500,3000);
        $s=array_intersect($may_salary,$june_salary);
        foreach($s as $m)
        {
            echo $m."<br>";
        }

    ?>
</body>
</html>