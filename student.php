<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Names Sorting</title>
    
</head>
<body>

<h1>Student Names Sorting</h1>

<?php

$students = array("John",  "Bob","Alice", "David", "Eve");


echo "Original array:<br>";
print_r($students);



asort($students);
echo "<br>Array sorted in ascending order using asort:<br>";

print_r($students);



arsort($students);
echo "<br>Array sorted in descending order using arsort:<br>";

print_r($students);
?>

</body>
</html>

