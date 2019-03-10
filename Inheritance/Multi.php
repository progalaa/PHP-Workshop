<?php
/** Multi Level Inheritance  */
class A {
    public function myage() {
        return  ' age is 80';
    }
}
class B extends A {
    public function mysonage() {
        return  ' age is 50';
    }
}
class C extends B {
    public function mygrandsonage() {
        return  'age is 20';
    }
    public function myHistory() {
        echo "Class A " .$this->myage() ."<br />";
        echo "Class B ".$this-> mysonage()."<br />";
        echo "Class C " . $this->mygrandsonage()."<br />";
    }
}
$obj = new C();
$obj->myHistory();
?>