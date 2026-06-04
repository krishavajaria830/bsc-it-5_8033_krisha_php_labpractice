<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $CMONTH="june";
    $day="tuesday";
    if($CMONTH=="june")
        {
        
        if($day=="wednesday")
        {
            echo"the day is not tuesday";
        }
        elseif($day=="friday")
        {
            echo"the day is not tuesday";
        }
       else
        {
           echo"the current month is:".$CMONTH."</br>";
        }
        }
        else
        {
            echo"the current month not found";
        }
    ?>
</body>
</html>