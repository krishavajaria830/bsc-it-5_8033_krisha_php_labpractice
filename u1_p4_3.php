<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $CMONTH="july";
         if($CMONTH=="june")
         {
             echo"the current month is not june";
         }
         elseif($CMONTH=="july")
         {
             echo"the current month is july";
         }
        else
         {
            echo"the current month is:".$CMONTH."</br>";
         }
    ?>
</body>
</html>