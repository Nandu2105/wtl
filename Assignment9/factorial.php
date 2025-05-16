<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" value="Find Factorial">
</form>
   
<?php
if ($_POST) {
    $n = $_POST['num'];
    $fact = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }

    echo "Factorial of $n is: $fact";
}  
?>
