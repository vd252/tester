<?php
  require_once 'User.php';
class Employee
  {
      private $name;
      private $age;
      private $salary;

      public function __construct($name, $age, $salary)
      {
          $this->name = $name;
          $this->age = $age;
          $this->salary = $salary;
      }

      public function setName($name)
      {
          $this->name = $name;
      }

      public function getName()
      {
          return $this->name;
      }

      public function setAge($age)
      {
          if ($this->isAgeCorrect($age)) {
              $this->age = $age;
          }
      }

      public function getAge()
      {
          return $this->age;
      }

      public function setSalary($salary)
      {
          $this->name = $salary;
      }

      public function getSalary()
      {
          return $this->salary . '$';
      }

      private function isAgeCorrect($age)
      {
          return $age >=18 and $age <= 60;
      }

  }
    $user1 = new Employee('Eric',23, 100);




    echo $user1->getName() . '<br>';
    echo $user1->getAge() . '<br>';
    echo $user1->getSalary() . '<br>';



    ?>




