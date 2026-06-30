<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"sorting array"."<br>";
        $name=array("riya","diya","jiya","kiya");

        foreach($name as $ele)
        {
            echo $ele."<br>";
        }
        echo"<br>"."after sorting"."<br>";

        sort($name);
        foreach($name as $ele1)
        {
            echo $ele1."<br>";
        }
    ?>
</body>
</html>