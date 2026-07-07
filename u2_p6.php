<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
            <h2>Calculator</h2>
            <form method ="get">
                <input type="number" name="num1" placeholder="enter value"required><br>
                <input type="number" name="num2" placeholder="enter value"required><br>
                <select name="op" required><br>
                    <option value="+"> addition </option>
                    <option value="-"> subtraction </option>
                    <option value="*"> multiplication </option>
                    <option value="/"> division </option>
                </select><br><br>
                <input type="submit" name="submit" value="calculate">  
            </form>  
            <?php
                function calculate($num1,$num2,$op){
                    switch($op){
                        case '+':
                            return $num1+$num2;
                        case '-':
                            return $num1-$num2;
                        case '*':
                            return $num1*$num2;
                        case '/':
                            return $num2 != 0 ? $num1 / $num2 : "cannot divide by zero";
                        default:
                            return "invalid operation";
                        
                    }
                }
                if(isset($_GET['submit']))
                {
                    $n1 = $_GET['num1'];
                    $n2 = $_GET['num2'];
                    $op = $_GET['op'];
                    $result=calculate($n1,$n2,$op);
                    echo"<h3> result:". $result."</h3>";
                }
            ?>
    </body>
</html>