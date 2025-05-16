<?php
class Student {
    public $name;
    public $age;
    public $marks;
    public $cgpa;

    function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }
    function display() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Marks: " . $this->marks . "<br>";
        echo "CGPA: " . $this->cgpa . "<br>";
    }
}
$student1 = new Student("Nandini", 21, 450, 9.1);

$student1->display();
?>
