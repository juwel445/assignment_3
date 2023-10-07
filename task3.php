<?php
function sortGradesDescending($grades) {
    // Sort the array in descending order
    rsort($grades);

    print_r($grades);
}

// Create an array with the grades
$grades = array(85, 92, 78, 88, 95);

sortGradesDescending($grades);
?>
