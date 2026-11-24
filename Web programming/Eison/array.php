<?php 
$students = array("Ravi", "Anu", "Kiran", "Meena", "Deepak"); 
 
echo "<pre>"; 
echo "Original array:\n"; 
print_r($students); 
 
asort($students); 
echo "\nAfter asort() (ascending order):\n"; 
print_r($students); 
 
arsort($students); 
echo "\nAfter arsort() (descending order):\n"; 
print_r($students); 
echo "</pre>"; 
?> 