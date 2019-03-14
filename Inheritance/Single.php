<?php

/** Single Level Inheritance  */

class A
{
    public function printItem($string)
    {
        echo ' Hi : ' . $string . "<br/>";
    }

    public function printPHP()
    {
        echo 'I am from valuebound' . PHP_EOL . "<br/>";
    }
}

class B extends A
{
    public function printItem($string)
    {
        echo 'Hi: ' . $string . PHP_EOL . "<br/>";
    }

    public function printPHP()
    {
        echo "I am from ABC" . "<br/>";
    }
}

$a = new A();
$b = new B();
$a->printItem('Raju');
$a->printPHP();
$b->printItem('savan');
$b->printPHP();
?>