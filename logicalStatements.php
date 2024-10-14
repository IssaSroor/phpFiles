<?php
    $year = 2024;
    function isLeap($year){
        if($year == 0){
            return false;
        }
        if($year < 0){
            return false;
        }
        if($year % 4 == 0){ 
            return true;
        }
    }
    if(isLeap($year)){
        echo "$year is a leap year";    
    }
    else{
        echo "$year is not a leap year";
    }

    echo"<br><br>";
    $tempreture = 19;
    function iswinter($tempreture){

        if($tempreture < 20){
            return true;
        }
        else{
            return false;
        }

    }

    if(iswinter($tempreture)){
        echo "it is winter";
    }
    else{
        echo "it is summmer";
    }


    echo "<br><br>";

    $num1 = 3;
    $num2 = 3;

    function sumNum($num1, $num2){

        if ($num1 == $num2){
            return true;
        }
        else{
            return false;
        }
    }

    if(sumNum($num1, $num2)){
        echo ($num1 + $num2) * 3;
    }
    else{
        echo $num1 + $num2;
    }

    echo "<br><br>";

    $int1 = 20;
    $int2 = 10;

    function isEqual_thirty($int1, $int2){  

        if($int1 + $int2 == 30){

            return true;

        }
        else{
            return false;
        }

    }

    if(isEqual_thirty($int1, $int2)){
        echo ($int1 + $int2);
    }
    else{
        echo "invalid input";
    }

    echo "<br><br>";

    $num3 = 9;

    function isMultipleOfThree($num3){

        if($num3 < 0){
            return false;
        }
        if($num3 % 3 == 0){
            return true;

        }
        else{
            return false;
        }
    }


    if(isMultipleOfThree($num3)){
        echo "$num3 is a multiple of three";
    }
    else{
        echo "$num3 is not a multiple of three";
    }

    echo "<br><br>";

    $num4 = 40;
    function isInRange($num4){
        if($num4 >= 20 && $num4 <= 50){
            return true;
        }
        else{
            return false;
        }
    }

    if(isInRange($num4)){
        echo "$num4 is in range";
    }
    else{
        echo "$num4 is not in range";
    }

    echo "<br><br>";

    $num5 = 5;
    $num6 = 6;
    $num7 = 8;
    function largest($num5, $num6, $num7){

        $arr = [$num7, $num5, $num6];
        sort($arr);
        echo "the largest number is: " . $arr[2];

    }
    largest($num5, $num6, $num7);

    echo "<br><br>";

    function electricBill($unit){

        if($unit >= 0 && $unit <= 50){
            $bill_amount = $unit * 2.50;
            echo"". $bill_amount ."";
        }
        if($unit >= 51 && $unit <= 150){
            $second = ($unit - 50) * 5;
            $first = 50 * 2.50;
            $bill_amount = $first + $second;
            echo "". $bill_amount ."";
        }
        if($unit >= 151 && $unit <= 250){
            $third = ($unit - 150) * 6.20;
            $second = 100 * 5;
            $first = 50 * 2.50;
            $bill_amount = $first + $second + $third;
            echo "". $bill_amount ."";
        }
        if($unit > 250){
            $fourth = ($unit - 250) * 7.50;
            $third = 100 * 6.20;
            $second = 100 * 5;
            $first = 50 * 2.50;
            $bill_amount = $first + $second + $third + $fourth;
            echo "". $bill_amount ."";
        }
    }

    electricBill(251);

    echo "<br><br>";

    function calculater($num8 , $num9 , $operator){
        if($operator == "+"){
            $result = $num8 + $num9;
            echo $result;            
        }
        if($operator == "-"){
            $result = $num8 - $num9;
            echo $result;
        }
        if($operator == "*"){
            $result = $num8 * $num9;
            echo $result;
        }
        if($operator == "/"){
            $result = $num8 / $num9;
            echo $result;
        }
    }

    calculater(10, 5, "/");

    echo "<br><br>";

    function isEligible($age){

        if($age < 18){
            return true;
        }
        else{
            return false;
        }
        }
        if(isEligible(20)){
            echo "not eligible";
        }
        else{
            echo "eligible";
        }

        echo "<br><br>";    

        function whatIsNumber($number){
            if($number < 0){
                echo"negative";
            }
            
            if($number == 0){
                echo "zero";   
            }
            if($number > 0){
                echo "positive";
            }
            }

            whatIsNumber(9);

            echo "<br><br>";

            function gpa($grades){
                $sum = 0;
                foreach($grades as $grade){ 
                    $sum += $grade;    
                }
                $average = $sum / count($grades);
                if($average >= 90){
                    echo "your final grade is A";
                }
                elseif($average >= 80){
                    echo "your final grade is B";
                }
                elseif($average >= 70){
                    echo "your final grade is C";
                }
                elseif($average >= 60){
                    echo "your final grade is D";
                }
                elseif($average >= 50){
                    echo "your final grade is E";
                }
                elseif($average < 50){
                    echo "your final grade is F";
                }
            }

            gpa([79, 80, 61, 72, 83, 84, 75, 76, 57, 98, 69, 70, 81, 72, 73, 84, 95, 56, 67, 88, 79, 56]);

            echo "<br><br>";

?>

