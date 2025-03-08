<?php
class Student {
private $name;
private $age;
public function __construct($name, $age) {
$this->name = $name;
$this->age = $age;
}
public function getName() {
return $this->name;
}
public function getAge() {
return $this->age;
}
}
$students = array();
$students[] = new Student("John", 18);
$students[] = new Student("Jane", 20);
$students[] = new Student("Bob", 25);
foreach ($students as $student) {
echo "Name: " . $student->getName() . "<br>";
echo "Age: " . $student->getAge() . "<br>";
echo "<hr>";
}
?>