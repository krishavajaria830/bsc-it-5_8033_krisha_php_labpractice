<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","studentdb");
        if (!$conn)
        {
            die("connection failed:" . mysqli_connect_error());
        }
        $sql = "CREATE TABLE IF NOT EXISTS students3
        (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(150),
            email VARCHAR(150),
            city VARCHAR(150)
        )";
        //CREATE TABLE IF NOT EXISTS students
        if(mysqli_query($conn,$sql))
        {
            echo"table created successfully.";
        }
        else
        {
            echo "ERROR:" . $conn->error;
        }
        $conn->close();
    ?>
</body>
</html>