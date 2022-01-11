<?php
  class Employee
  {
      public $name;
      public $age;
      public $salary;

      public function getName()
      {
          return $this->name;
      }

      public function getAge()
      {
          return $this->age;
      }

      public function getSalary()
      {
          return $this->salary;
      }
  }
    $user1 = new Employee;
    $user1->name = 'Толя';
    $user1->age = 34;
    $user1->salary = 3700;


    echo $user1->getName() . '<br>';
    echo $user1->getAge() . '<br>';
    echo $user1->getSalary() . '<br>';
    ?>




