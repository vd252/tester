<?php
  class Employee
  {
      public $name;
      public $age;
      public $salary;

      public function setName($name)
      {
          $this->name = $name;
      }

      public function setAge($age)
      {
          $num = $age;
          if ($num > 18)
          {
              $this->age = $age;
          }
      }

      public function setSalary($salary)
      {
          $this->salary = $salary;
      }

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

      public function checkAge()
      {
          if ($this->age > 18){
              return true;
          } else {
              return false;
          }
      }


  }
    $user1 = new Employee;
    $user1->name = 'Толя';
    $user1->age = 25;
    $user1->salary = 3700;

    echo $user1->checkAge() . '<br>';
    echo $user1->getName() . '<br>';
    echo $user1->getAge() . '<br>';
    echo $user1->getSalary() . '<br>';

    $user1->setAge(12);
    echo $user1->getAge() . '<br>';

    ?>




