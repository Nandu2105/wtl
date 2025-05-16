<?php

$fruits=array("banana","apple","kiwi");

echo"1st fruit: ".$fruits[0]."<br>";

foreach($fruits as $fruit)
echo"fruits: ".$fruit."<br>";

array_push($fruits,"orange");
echo"After added orange array is: ";
print_r($fruits);

array_pop($fruits);
echo"<br>After using pop method array is: ";
print_r($fruits)."<br>";

array_unshift($fruits,"mango"). "<br>";
echo"<br>After using unshift method array is: ";
print_r($fruits);

array_shift($fruits). "<br>";
echo"<br>After using shift method array is: ";
print_r($fruits);

if(in_array("apple",$fruits)){
    echo"<br>apple is in array";
}

?>