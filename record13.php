<?php

$students = array("anu", "ancy", "anitha", "anaya", "lechu");


echo "<h3>Original Array:</h3>";
print_r($students);
echo "<br><br>";


$asc_students = $students; 
asort($asc_students);

echo "<h3>Array Sorted in Ascending Order (asort):</h3>";
print_r($asc_students);
echo "<br><br>";


$desc_students = $students; 
arsort($desc_students);

echo "<h3>Array Sorted in Descending Order (arsort):</h3>";
print_r($desc_students);
?>

