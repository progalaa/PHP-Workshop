<?php
abstract class Cars {
    public abstract function getCompanyName();
    protected abstract function getPrice();
}
class BMW  extends Cars {
    public function getCompanyName() {
        return "Maruthi Suzuki" . '<br/>';
    }
    public  function getPrice() {
        return 720000 . '<br/>';
    }
}
class Elantra extends Cars {
    public function getCompanyName() {
        return "Hyundai" . '<br/>';
    }
    public function getPrice() {
        return 300000 . '<br/>';
    }
}
$car = new BMW();
$car1 = new Elantra();
echo $car->getCompanyName();
echo $car->getPrice();
echo $car1->getCompanyName();
echo $car1->getPrice();


/**
 * Objects cannot be created for the abstract classes
 * If a class has only one method as abstract, then that class must be an abstract class
 * The child class which extends an abstract class must define all the methods of the abstract class
 * If the abstract method is defined as protected in the parent class, the function implementation must be defined as either protected or public, but not private
 *
 */

?>