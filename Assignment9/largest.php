
<!DOCTYPE html>
<html>
<head>
    <title>Find Largest Number</title>
</head>
<body>

<h2>Enter Three Numbers</h2>
<form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    Number 3: <input type="number" name="num3" required><br><br>
    <input type="submit" name="find" value="Find Largest">
</form>

<?php
if (isset($_POST['find'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];

    if ($a >= $b && $a >= $c) {
        $largest = $a;
    } elseif ($b >= $a && $b >= $c) {
        $largest = $b;
    } else {
        $largest = $c;
    }

    echo "<h3>The largest number is: $largest</h3>";
}
?>

</body>
</html>
