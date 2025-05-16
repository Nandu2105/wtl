<?php
function calculateGrade($marks) {
    if ($marks >= 90) {
        return "A+";
    } elseif ($marks >= 80) {
        return "A";
    } elseif ($marks >= 70) {
        return "B";
    } 
     else {
        return "c";
    }
}

$studentName = "Nandini";
$studentMarks = 85;
$grade = calculateGrade($studentMarks);

echo "Student Name: " . $studentName . "<br>";
echo "Marks: " . $studentMarks . "<br>";
echo "Grade: " . $grade;

?>
