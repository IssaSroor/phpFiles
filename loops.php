<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<>
<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }

}

echo "<br><br>";

$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}
echo $sum;

echo "<br><br>";

for ($row = 1; $row <= 5; $row++) {

    $letter = chr(64 + $row);

    for ($col = 1; $col <= 5; $col++) {

        if ($col <= 5 - $row) {
            echo "A ";
        } else {
            echo $letter . " ";
        }
    }

    echo "<br>";
}

echo "<br><br>";

for ($row = 1; $row <= 5; $row++) {

    for ($col = 1; $col <= 5; $col++) {

        if ($col <= 5 - $row) {
            echo 1;
        } else {
            echo $row . " ";
        }
    }

    echo "<br>";
}

echo "<br><br>";

for ($row = 1; $row <= 5; $row++) {

    for ($col = 1; $col <= 5; $col++) {

        if ($row == $col) {
            echo $row . " ";
        } else {
            echo "0 ";
        }
    }

    echo "<br>";
}

echo "<br><br>";

$factorial = 1;
$number = 5;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo $factorial;

echo "<br><br>";

$num1 = 0;
$num2 = 1;

$num3 = 10;

echo "$num1 ";

for ($i = 1; $i < $num3; $i++) {
    echo "$num2 ";

    $nextNum = $num1 + $num2;

    $num1 = $num2;
    $num2 = $nextNum;
}

echo "<br><br>";

$text = "Orange Coding Academy";

$count = 0;

$text = strtolower($text);

for ($i = 0; $i < strlen($text); $i++) {

    if ($text[$i] == 'c') {
        $count++;
    }
}

echo "The number of 'c' characters in the text is: $count";

echo "<br><br>";
?>
<table border="1" cellpadding="3px" cellspacing="0px">
<?php
for ($row = 1; $row <= 6; $row++) {
    echo "<tr>"; 
    for ($col = 1; $col <= 5; $col++) {

        $product = $row * $col;

        echo "<td>$row * $col = $product</td>";
    }
    echo "</tr>"; 
}
?>
<?php

for( $i = 1; $i <= 50;$i++){
    if ($i % 3== 0 && $i %5== 0) {
        echo "FizzBuzz". " ";
    }
    else if ($i % 3 == 0) {
        echo "Fizz"." ";
    }
    else if ($i % 5== 0) {
            echo "Buzz"." ";
    }
    else {
        echo $i . " ";
    }
}
echo"<br><br>";

$n = 5; 

$currentNumber = 1;

for ($i = 1; $i <= $n; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $currentNumber . " "; 
        $currentNumber++; 
    }
    echo "<br>"; 
}
?>
<?php
// Total number of rows for the top half
$totalRows = 5;

// Print the top half of the pattern
for ($i = 1; $i <= $totalRows; $i++) {
    // Print leading spaces
    for ($spaces = $totalRows - $i; $spaces > 0; $spaces--) {
        echo "  "; // Two spaces for better alignment
    }
    // Print letters from A to the current row number
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " "; // Print letter and space
    }
    echo "<br>"; // Move to the next line
}

// Print the bottom half of the pattern
for ($i = $totalRows - 1; $i >= 1; $i--) {
    // Print leading spaces
    for ($spaces = $totalRows - $i; $spaces > 0; $spaces--) {
        echo "  "; // Two spaces for better alignment
    }
    // Print letters from A to the current row number
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " "; // Print letter and space
    }
    echo "<br>"; // Move to the next line
}
?>

</body>
</html>