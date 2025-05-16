<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations in PHP</title>
</head>
<body>

<h2>Enter Two Numbers</h2>
<form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "<h3>Results:</h3>";
    echo "Addition: " . ($num1 + $num2) . "<br>";
    echo "Subtraction: " . ($num1 - $num2) . "<br>";
    echo "Multiplication: " . ($num1 * $num2) . "<br>";

    if ($num2 != 0) {
        echo "Division: " . ($num1 / $num2) . "<br>";
    } else {
        echo "Division: Cannot divide by zero!<br>";
    }
}
?>
</body>
</html>
