<?php
// Define a class for prime number operations
class Practice {
    // Function to check if a number is prime
    public function isPrimeNumber($number) {
        // Check if the number is less than 2
        if ($number < 2) {
            return false; // Numbers less than 2 are not prime
        }
        // Check divisibility from 2 to the square root of the number
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; // If divisible, not prime
            }
        }
        return true; // If no divisors found, it's prime
    }
}

// Create an instance of the Practice class
$result = new Practice();
$number = 2; // The number to check

// Call the method to check if it's prime
$is_prime = $result->isPrimeNumber($number);

// Output the result
echo "The Number {$number} " . ($is_prime ? "is a prime number" : "is not a prime number");
?>
