<?php

$string = "sample text";
$uppercase = strtoupper($string);
echo "$uppercase <br>";

$lowercase = strtolower($string);
echo "$lowercase <br>";

$firstupper = ucfirst($string);
echo "$firstupper <br>";

$capitalizeeach = ucwords($string);
echo "$capitalizeeach <br>";

$num = "20241008";
$year = substr($num, 0, 4);
$month = substr($num, 4, 2);
$day = substr($num, 6, 2);
$dateformat = $year . "-" . $month . "-" . $day;
echo "$dateformat <br>";

$string1 = "test orange issa";
if (strpos($string1, "issa") !== false) {
    echo "contains the word <br>";
} else {
    echo "not contain <br>";
}

$url = "file:///C:/Users/Orange/Downloads/PHP%20Basic%20-%20PHP%20String.pdf";
$filename = basename($url);
echo "$filename <br>";

$email = "issasroorofficial@gmail.com";
list($username, $domain) = explode('@', $email);
echo "$username <br>";


$lastthree = substr($email, -3);
echo "$lastthree <br>";

$character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&0123456789";
$shuffled = str_shuffle($character);
$password = substr($shuffled, 0, 8);

echo "$password<br>";


$originalSentence = "Hello world! This is a test.";
$newWord = "issa";

$updatedSentence = preg_replace('/^\w+/', $newWord, $originalSentence);

echo "$updatedSentence <br> ";

$string2 = "issasroor";
$string3 = "issasrour";

$length = min(strlen($string2), strlen($string3));
for ($x = 0; $x < $length; $x++) {
    if ($string2[$x] !== $string3[$x]) {
        echo "First difference between two strings at position " . ($x + 1) . ": \"" . $string2[$x] . "\" vs \"" . $string3[$x] . "\"";


    } else if (strlen($string2) !== strlen($string3)) {
        echo "One string is longer than the other. Difference at position " . ($length + 1) . ": ";
        echo (strlen($string2) > strlen($string3)) ? "\"" . $string2[$length] . "\" vs (no character)" : "(no character) vs \"" . $string3[$length] . "\"";
    }
}

$array = ["string1", "string2", "string3"];
var_dump($array);

$alpha = "abcdefghijklmnopqrstuvwxyz";
$position = 25;
$nextLetter = substr($alpha,$position + 1,1);
echo $nextLetter;


$originalString = "Hello World!";
$stringToInsert = " PHP";
$position = 5;
if ($position < 0 || $position > strlen($originalString)) {
    return "Invalid position.";
}

$firstPart = substr($originalString, 0, $position);
$secondPart = substr($originalString, $position);

$resultString = $firstPart . $stringToInsert . $secondPart;

echo "Resulting string: $resultString <br>"; 

$numwithzero = 00000642.23;
$numwithoutzeros = ltrim($numwithzero);
echo "$numwithoutzeros <br>";


$originalString = "Hello, World!";
$start = 7; 
$length = 5; 

$resultString = substr_replace($originalString, '', $start, $length);
    
echo "Original String: $originalString <br>";
echo "Modified String: $resultString <br>"; 

$originalString = "Hello, World!-----";
$result = rtrim($originalString, '-');
    

echo "Original String: $originalString <br>";
echo "Modified String: $result <br>"; 

$originalString = "Hello, World! This is a test string @2024 #PHP.";
$result = preg_replace('/[^a-zA-Z0-9\s]/', '', $originalString);
    

echo "Original String: $originalString<br>";
echo "Modified String: $result<br>";


$originalString = "PHP is a popular general-purpose scripting language that is especially suited to web development.";
$words = explode(' ', $originalString);
    
$result = array_slice($words, 0, 5);
    
   

echo "Original String: $originalString<br>";
foreach( $result as $x ) {
    echo chop($x);
}
echo "<br><br>";


$originalString = "5,67,890,123.45";

$result = str_replace(",","", $originalString);


echo "Modified String: $result<br>";

for ($char = 97; $char <= 122; $char++) {
    echo chr($char) . " ";
}