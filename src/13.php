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
$student = new Student("Alice", 18);
echo $student->getName(); // Output: Alice
echo $student->getAge(); // Output: 18
?>
