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
        if($conn->connect_error)
        {
            die("connection failed");
        }
        $sql="SELECT * FROM students3";
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            echo'<table border="1">';
                    echo"<tr>
                        <td>id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>City</td>
                    </tr>";
                
            while($row = $result->fetch_assoc())
            {
                
                    echo"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['city']}</td>
                    echo </tr>";
            '</table>';
            }
        }
            else
            {
                echo "no record found";
            }
            $conn->close();
        
    ?>
</body>
</html>