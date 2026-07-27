<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try
        {
            $conn=new PDO("mysql:host=localhost:3307;dbname=studentdb","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="CREATE TABLE IF NOT EXISTS students4
            (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50),
                email VARCHAR(50),
                city VARCHAR(30)
            )";
            $conn->exec($sql);
            echo "table created successfully.";
        }
        catch(PDOException $e)
        {
            echo "connection failed:".$e->getmessage();
        }
        $conn = null;
    ?>
</body>
</html>