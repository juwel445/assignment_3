<?php
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store odd numbers
    $oddNumbers = array();

    // Loop through the input array
    foreach ($numbers as $number) {
        // Check if the number is odd (not divisible by 2)
        if ($number % 2 != 0) {
            // Add the odd number to the new array
            $oddNumbers[] = $number;
        }
    }

    // Print the resulting array
    print_r($oddNumbers);
}

$numbers = range(1, 10);

removeEvenNumbers($numbers);


?>
