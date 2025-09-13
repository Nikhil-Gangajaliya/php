<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


echo "<br><h2>Day 1 - Setup + Hello World + Variables.</h2><br><br>";

        $name = "Nikhil";
        $number = 71;
        $sal = 100.1000;
        $isGood = true;

        echo "His Name is $name<br>";
        echo "His Number is $number<br>";
        echo "His salary is $sal<br>";
        echo "He is Good! - $isGood<br>";

        echo "<br><h2>Day 2: Operators + If/Else.</h2><br> ";

        echo "<h3>1. Operators in PHP :-</h3><br>";
        echo "<u>*Arithmetic Operators</u><br><br>";

        $a = 10;
        $b = 11;
        echo "$a + $b = ".($a+$b)."<br>";
        echo "$a - $b = ".($a-$b)."<br>";

        echo "<br><u>*Assignment Operators</u><br><br>";

        $x = 9;
        $x +=1;
        echo $x."<br>";

        echo "<br><u>*Comparison Operators</u><br><br>";

        $a1 = 10;
        $b1 = 21;

        echo $a1 . " == " . $b1 . " : " . ($a1 == $b1) . "<br>";
        echo $a1 . " != " . $b1 . " : " . ($a1 != $b1) . "<br>";
        echo $a1 . " < "  . $b1 . " : " . ($a1 <  $b1) . "<br>";
        echo $a1 . " > "  . $b1 . " : " . ($a1 >  $b1) . "<br>";

        echo "<br><u>*Logical Operators</u><br><br>";

        $age = 18;
        $indian = true;

        if($age>=18 && $indian){
            echo "You can Vote.Because Your age is $age.<br>";
        }
        else{
            echo "You can't vote.<br>";
        }

        echo "<h3>2. If / Else Statements :-</h3><br>";

        $marks = 89;

        if($marks > 90){
            echo "A grade.<br>";
        }
        elseif($marks >75 && $marks<=90){
            echo "B Grade.<br>";
        }
        elseif($marks >60 && $marks<=75){
            echo "C Grade.<br>";
        }
        else{
            echo "D Grade.<br>";
        }

        $day = "Mon";

        switch ($day) {
            case "Mon":
                echo "<br>Monday";
                break;
            case "Tue":
                echo "<br>Tuesday";
                break;
            default:
                echo "<br>Other day";
        }

        echo "<br><h2>Day 3 - Loops in PHP.</h2><br>";

        echo "<h3>1. For Loop :-</h3><br>";

        for($i = 6; $i <= 10; $i++){
            echo "Number : $i<br>";
        }

        echo "<h3>2. While Loop :-</h3><br>";

        $id  = 1;
        while($id<=5){
            echo "Count $id<br>";
            $id++; 
        }

        echo "<h3>3. Do...While Loop :-</h3><br>";

        $ab = 6;
        
        do {
            echo "count $ab <br>";
            $ab++;
        } while ($ab <= 5 );
        
        echo "<h3>4. Foreach Loop :-</h3><br>";

        $subject = ["Hindi","Sanskrit","S.S"];

        foreach ($subject as $sub => $value) {
            echo "$sub - $value<br>";
        }

        echo "<h3>5. Break & Continue :-</h3><br>";

        for ($j = 1; $j <= 5 ; $j++) {
            if($j == 2) {
                continue;
                echo $j."<br>";
            }
            if($j == 5){
                break;  
            }
        }

        for($q1 = 1; $q1 <=20; $q1++){
                echo $q1;
        }

        for($q2=1; $q2<=20;$q2++){
             if($q2%3==0){
                continue;
            }
            if($q2==15){
                break;
            }
            echo $q2."<br>";
        }

        echo "<br><h2> Day 4 - Arrays in PHP.</h2><br> ";

        echo "<h3>1. Indexed Arrays :-</h3><br>";

        $fruits = ["Banana","Mango","Apple"];
        echo $fruits[2];

        echo "<h3>2. Associative Arrays :-</h3><br>";

        $score = [
            "Nikhil" => 90,
            "Om"=> 100,
            "NG" => 88
        ];

        print_r($score);
        echo "<br>";
        echo $score["Nikhil"]." is Nikhil's Marks<br>";

        echo "<h3>3. Multidimensional Arrays :-</h3><br>";
 
        $students = [
            ["Nikhil", 90, "Rajkot"],
            ["Raj", 85, "Surat"],
            ["Amit", 78, "Ahmedabad"]
        ];

        
        echo $students[2][1]."<br>"; 
 
        foreach ($students as $student) {
            echo "Name: $student[0], Marks: $student[1], City: $student[2]<br>";
        }

        echo "<h3>4. Useful Array Functions :-</h3><br>";

        $numbers = [10, 20, 30];

        echo count($numbers)."<br>"; // Count elements
        array_push($numbers, 60)."<br>"; // Add element
        print_r($numbers)."<br>";

        sort($numbers)."<br>"; // Sort ascending
        rsort($numbers)."<br>"; // Sort descending

        if (in_array(30, $numbers)) {
            echo "<br>founded.<br>";
        }

        $cricketers = [
            ["Rohit",45,"MI"],
            ["Virat",18,"RCB"],
            ["Hardik",33,"MI"]
        ];
        echo $cricketers[2][0]."<br>";

        echo "Name : ".$cricketers[0][0]." Jursey : ".$cricketers[0][1]." Team : ".$cricketers[0][2];
        echo "<br>".$cricketers[1][1]." is the jursey number of ".$cricketers[1][0]." who plays for ".$cricketers[1][2]. " in IPL";

         echo "<br><h2> Day 5 - Functions in PHP.</h2><br> ";

         echo "<h3>2. Creating & Calling a Function :-</h3><br>";

         function tripName(){
            echo "Girnar Yatra<br>";
         }

         tripName();
         
         echo "<h3>3. Function with Parameters :-</h3><br>";

         function ipl($team){
            echo "My Favuorite Team is $team.<br>";
         }
         ipl("Mumbai Indians");

         echo "<h3>4. Function with Return Value :-</h3><br>";

         function expense($travel, $food){
            return $travel + $food;
         }
         $total = expense(1200,900);
         echo "Total Expense of Trip is $total";

         echo "<h3>4. Function with Return Value :-</h3><br>";

         function captain($name = "Rohit Sharma"){
            echo "Captain $name<br>";
         }
         captain();
         captain("Hardik Pandya");

         echo "<h3>6. Variable Scope :-</h3><br>";

         $globalVar = "Nikhil Ashokbhai Gangajaliya";

         function testScope(){
            global $globalVar;
            echo $globalVar;
         }
         testScope();

         echo "<h3>7. Anonymous Function (Closure) :-</h3><br>";

         $sayHi = function($name){
            echo "Hi $name<br>";
         };

         $sayHi("Nikhil");

         $sayHello = "Hello";
         $say = function($name2) use ($sayHello){
            echo "$sayHello, $name2";
         };
         $say("Gangajaliya<br>");

         echo "<h3>Practice :-</h3><br>";

        // Function to multiply two numbers
        function multiply($a, $b) {
            return $a * $b;
        }

        // Function to check if a number is even
        function isEven($num) {
            return $num % 2 == 0;
        }

        // Calling multiply function
        $ans = multiply(4, 5);
        echo "Answer : " . $ans . "<br>";

        // Calling isEven function
        $number = 10;
        if (isEven($number)) {
            echo $number . " is even.";
        } else {
            echo $number . " is odd.";
        }

        
    ?>
</body>
</html>