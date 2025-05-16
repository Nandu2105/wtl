<?php
$numbers = array(10, 20, 30, 40, 50);

echo "1. Total elements: " . count($numbers) . "<br>";

array_push($numbers, 60); 
echo "2. After adding 60: ";
print_r($numbers);
echo "<br>";

array_pop($numbers); 
echo "3. After removing last element: ";
print_r($numbers);
echo "<br>";

$reversed = array_reverse($numbers); 
echo "4. Reversed array: ";
print_r($reversed);
echo "<br>";

sort($numbers); 
echo "5. Sorted array: ";
print_r($numbers);
echo "<br>";

echo "6. Sum of elements: " . array_sum($numbers) . "<br>"; 

$filtered = array_filter($numbers, function($n) { return $n > 20; }); 
echo "7. Filtered array (values > 20): ";
print_r($filtered);
echo "<br>";

$mapped = array_map(function($n) { return $n * 2; }, $numbers); 
echo "8. Mapped array (each element * 2): ";
print_r($mapped);
echo "<br>";

$searchIndex = array_search(30, $numbers); 
echo "9. Index of 30: " . $searchIndex . "<br>";
?>
