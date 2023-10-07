<?php

/*
Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

*/ 

$studentGrades = [
    'juwel' => [
        'Math' => 80,
        'English' => 90,
        'Science' => 70,
    ],
    'john' => [
        'Math' => 90,
        'English' => 88,
        'Science' => 94,
    ],
    'jane' => [
        'Math' => 78,
        'English' => 86,
        'Science' => 82,
    ],
];

function calculateAverageGrades($studentGrades) {
    $gradeMappings = [
        'A+' => 90,
        'A' => 80,
        'B' => 70,
        'C' => 60,
        'D' => 50,
        'F' => 0,
    ];
   
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        $letterGrade = ' ';
        foreach ($gradeMappings as $grade => $minScore) {
            if ($average >= $minScore) {
                $letterGrade = $grade;
                break;
            }
        }


    echo "Student: $student \n";
    echo "Grade: $letterGrade \n\n";





    }


}
calculateAverageGrades($studentGrades);



?>


