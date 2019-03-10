<?php
interface A {
    public function Compute();
}
interface B extends A {
    public function Divide();
}
class C implements B {
    public function Divide() {
        $var=10;
        $var1=2;
        $var3=$var/$var1;
        echo "division of 10/2 is" . $var3;
}
    public function Compute() {
        $a=2;
        $b=3;
        $c=$a*$b;
        echo "multiplication of 2*3 is" . $c;
    }
}
$obj = new C();
$obj->Divide();
$obj->Compute();


/**
 * All methods declared in an interface must be public; this is the nature of an interface
 * All methods in the interface must be implemented within a class; failure to do so will result in a fatal error
 * The class implementing the interface must use the exact same method signatures as are defined in the interface
 * We cannot create objects to interface, but the class implementing the interface can have objects
 * We cannot define a variable in an interface.
 * If we extend interface all the methods of the interface must be implemented in the child class
 */
?>

