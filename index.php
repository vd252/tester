<?php
  require_once 'User.php';
class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}
    $citys = [new City('Moscow', 9000000), new City('St.Pitersberg', 7000000), new City('Rostow', 3000000)];

    foreach ($citys as $city)
    {
        echo $city->name . ' ' . $city->population;
        echo '<br>';
    }

    echo '<pre>';
    print_r($citys);
    echo '</pre>';

    ?>




