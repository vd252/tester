<?php
  class Employee
  {
      public $name;
      public $age;
      public $salary;

      public function __construct($name, $age, $salary)
      {
          $this->name = $name;
          $this->age = $age;
          $this->salary = $salary;
      }


  }
    $user1 = new Employee;
    $user1->name = 'Eric';
    $user1->age = 25;
    $user1->salary = 1000;

    echo $user1->name . '<br>';
    echo $user1->age . '<br>';
    echo $user1->salary . '<br>';


    ?>




