<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Input Type</title>
</head>
<body>
    <h2>Check if Input is Integer, Decimal, or String</h2>
    <form method="GET">
        <label>Enter a value:</label>
        <input type="text" name="input" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if (isset($_GET['input'])) {
        $var = $_GET['input'];

        if (filter_var($var, FILTER_VALIDATE_INT) !== false) {
            echo "<p style='color:green;'>true - It is an integer.</p>";
        } elseif (filter_var($var, FILTER_VALIDATE_FLOAT) !== false) {
            echo "<p style='color:blue;'>true - It is a decimal number.</p>";
        } else {
            echo "<p style='color:red;'>true - It is a string.</p>";
        }
    }
    ?>
</body>
</html>
