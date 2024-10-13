<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }

        }
        return true;
    }
    $num = 4;
    if (isPrime($num)) {
        echo "$num is prime";
    } else {
        echo "$num is not prime";
    }

    function reveres($string)
    {
        return strrev($string);
    }

    echo "<br><br>";

    $orgString = "remove";
    $revString = reveres($orgString);
    echo "$revString";

    echo "<br><br>";

    function islowerCase($string)
    {
        return $string === strtolower($string);
    }
    $string1 = "iuqwioeyoqiwye";
    $string2 = "AJLSKJLSJ";
    if (islowerCase($string2)) {
        echo "your string is lower case";
    } else {
        echo "your string is not lower case";
    }

    echo "<br><br>";

    function swapNumber($num1, $num2)
    {

        $x = $num1;
        $num1 = $num2;
        $num2 = $x;
        echo "num1 = $num1 <br><Br>";
        echo "num2 = $num2";
    }

    $num1 = 5;
    $num2 = 10;
    swapNumber($num1, $num2);

    echo "<br><br>";

    function isArmstrongNum($num)
    {

        $digits = str_split($num);
        $sum = 0;
        foreach ($digits as $digit) {
            $sum += pow((int) $digit, 3);
        }
        return $sum == $num;
    }
    if (isArmstrongNum(407)) {
        echo "number is armstrong number";
    } else {
        echo "number is not armstrong number";
    }

    echo "<br><br>";

    function isPalindrome($string)
    {
        $string = strtolower(str_replace(' ', '', $string));
        $revString = strrev($string);
        return $revString == $string;
    }

    if (isPalindrome("eva can i see bees in a cave")) {
        echo "string is palindrome";
    } else {
        echo "string is not palindrome";
    }

    function removeDuplicates(array $array){
        return array_unique($array);

    }
    $arr1 = [1,2,2,3,4,4];
    $newarr = removeDuplicates($arr1);
    var_dump($newarr);

    

    ?>

</body>

</html>