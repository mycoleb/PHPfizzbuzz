<?php
// I created this function to determine what should be printed for each number.
function fizzBuzz($number) {
    // If the number is divisible by both 3 and 5, I want to print "fizzbuzz".
    if ($number % 3 === 0 && $number % 5 === 0) {
        return "fizzbuzz";
    } 
    // If the number is divisible only by 3, I print "fizz".
    elseif ($number % 3 === 0) {
        return "fizz";
    } 
    // If the number is divisible only by 5, I print "buzz".
    elseif ($number % 5 === 0) {
        return "buzz";
    } 
    // Otherwise, I just return the number itself.
    else {
        return $number;
    }
}

// I use this loop to go through all the numbers from 1 to 100.
for ($i = 1; $i <= 100; $i++) {
    // Here, I call my fizzBuzz function to decide what to print.
    $result = fizzBuzz($i);
    // I print the number and the result returned by my function.
    echo $i . ": " . $result . "\n";
}
?>
