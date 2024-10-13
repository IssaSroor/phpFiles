<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $arr1 = ["red", "green", "white"];
    $string = "Lorem ipsum dolor sit amet consectetur
    adipisicing elit. %s Ab quia 
    eaque voluptates 
    magnam totam, %s aperiam
    quibusdam molestiae, 
    tempora ex illo %s perspiciatis 
    officia, voluptate quidem. 
    Magni ipsa quaerat quas veniam officia?";

    $stringAfter = sprintf($string, $arr1[0], $arr1[1], $arr1[2]);

    echo $stringAfter;

    echo "<Br><br>";
    ?>

    <ul>
        <?php

        $arr1 = ["white", "green", "red"];
        foreach ($arr1 as $key) {

            echo "<li>$key</li>";

        }

        ?>
    </ul>

    <?php
    echo "<br><br>";
    $cities = [
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid"
    ];

    foreach ($cities as $country => $city) {
        echo "The capital of $country is $city";
        echo "<br><br>";
    }

    $colors = [4 => "white", 6 => "green", 11 => "red"];

    foreach ($colors as $color) {
        echo "$color";
        break;
    }
    echo "<br><br>";

    $addtoarr = [1, 2, 3, 4, 5];

    array_splice($addtoarr, 3, 0, '$');
    var_dump($addtoarr);

    echo "<Br><Br>";

    $arr2 = [
        "S" => "d",
        "W" => "s",
        "Q" => "v",
        "C" => "a",
    ];
    asort($arr2);
    foreach ($arr2 as $key => $value) {

        echo "$key = $value <br>";

    }

    echo "<br><br>";

    $arr3 = [
        12,
        23,
        43,
        13,
        54,
        76,
        23,
        43,
        121,
        23,
        11,
        78,
        60,
        62,
        68,
        71,
        68,
        73,
        85,
        66,
        64,
        76,
        63,
        75,
        76,
        73,
        68,
        62,
        73,
        72,
        65,
        74,
        62,
        62,
        65,
        64,
        68,
        73,
        75,
        79,
        73
    ];
    asort($arr3);
    $sum = array_sum($arr3);
    $count = count($arr3);
    $average = $sum / $count;
    echo $average;
    $lowest = array_slice($arr3, 0, 7);
    var_dump($lowest);

    rsort($arr3);
    $highest = array_slice($arr3, 0, 7);
    var_dump($highest);

    $arr4 = [1, 2, 3];
    $arr5 = [4, 5, 6];

    $merged = array_merge($arr4, $arr5);
    var_dump($merged);

    echo "<br><Br>";

    $arr6 = ["a", "b", "c"];
    foreach ($arr6 as $key) {

        echo strtoupper($key) . "<br>";

    }

    echo "<br><br>";

    $arr7 = ["A", "B", "C"];
    foreach ($arr7 as $key) {

        echo strtolower($key) . "<br>";

    }

    echo "<br><br>";

    for ($i = 200; $i < 250; $i++) {
        if ($i % 4 == 0) {
            echo "$i <br>";
        }
    }

    echo "<br><br>";

    $words = ["abcd", "abc", "ab", "a"];

    $shortest = strlen($words[0]);
    $longest = strlen($words[0]);

    foreach ($words as $word) {
        $length = strlen($word);

        if ($length < $shortest) {

            $shortest = $length;
        }
        if ($length > $longest) {

            $longest = $length;
        }
    }
    echo $shortest . "<br>";
    echo $longest . "<br>";

    echo "<br><Br>";

    $num4 = 11;
    $num5 = 20;

    $range = range($num4,$num5);

    $shuffle = shuffle($range);

    $generate = array_slice($range,0, 10);

    var_dump($generate);

    echo"<br><br>";

    $arr8 = [0,4,2,1,6,7,10];
    sort($arr8);
    foreach ($arr8 as $key) {
        if ($key == 0){
            continue;
        }
        else {
        echo $key;
        break;
        }
    }


    ?>

</body>

</html>