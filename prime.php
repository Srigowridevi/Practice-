<?php
function is_primenumber($number) {
    // Check if the number is less than 2
    if ($number < 2) {
        return false;
    }
    // Loop from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        // Check for divisibility
        if ($number % $i == 0) {
            return false; // Not a prime number
        }
    }
    return true; // It's a prime number
}

// Example usage
$numbersToCheck = [1, 2, 3, 4, 5, 10, 11, 13, 17, 19, 20, 23, 25];

foreach ($numbersToCheck as $number) {
    if (is_primenumber($number)) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
}
?>
