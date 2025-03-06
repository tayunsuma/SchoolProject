
<?php

class Student {
    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGrade() {
        return $this->grade;
    }
}

$student1 = new Student("Alice", 12, "A");
$student2 = new Student("Bob", 10, "B");

echo $student1->getName(); // Output: Alice
echo $student1->getAge(); // Output: 12
echo $student1->getGrade(); // Output: A

echo $student2->getName(); // Output: Bob
echo $student2->getAge(); // Output: 10
echo $student2->getGrade(); // Output: B

?>