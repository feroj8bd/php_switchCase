<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my_php</title>
</head>

<body>
    <h2>GPA calculator using switch case</h2>



    <?php
    $marks = 98;

    switch ($marks) {
        case ($marks >= 80 && $marks <= 100):
            echo "You get A+";
            break;
        case ($marks >= 70 && $marks <= 79):
            echo "You get A";
            break;
        case ($marks >= 60 && $marks <= 69):
            echo "You get A-";
            break;
        case ($marks >= 50 && $marks <= 59):
            echo "You get B";
            break;
        case ($marks >= 40 && $marks <= 49):
            echo "You get C";
            break;
        case ($marks >= 0 && $marks <= 39):
            echo "You get F";
            break;

        default:
            echo "Invalid Number";
            break;
    }
    ?>


    <h2>Using for loop</h2>

    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo " $i ";
    }

    ?>
    <h4>print 1-50 odd number using for loop</h4>

    <?php

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 != 0) {
            echo " $i";
        }
    }
    ?>

    <h4>GPA calculator using if else condition </h4>

    <?php
    $marks = 65;

    if ($marks >= 80 && $marks <= 100) {
        echo " You get A+";
    } elseif ($marks >= 70 && $marks <= 79) {
        echo " You get A";
    } elseif ($marks >= 60 && $marks <= 69) {
        echo " You get A-";
    } elseif ($marks >= 50 && $marks <= 59) {
        echo " You get B";
    } elseif ($marks >= 40 && $marks <= 49) {
        echo " You get C";
    } elseif ($marks >= 0 && $marks <= 39) {
        echo " You get F";
    } else {
        echo "Invalid number";
    }
    ?>

    <h3>age count</h3>
    <?php
        $age = 65;

        if ($age <18) {
            echo "You are child";
        }elseif ($age >=18 && $age <=45) {
            echo "You are Adult";
        }else {
            echo "You are old";
        }
    ?>

    <h3>array in php</h3>

    <?php
    $city = array("Dhaka", "Mymensingh", "Feni", "Jamalpur","Sherpur");
        // foreach ($city as $area){
        //     echo "$area.<br>";
        // }
            print_r ($city);

    ?>
</body>

</html>