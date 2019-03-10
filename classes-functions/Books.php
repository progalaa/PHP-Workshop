<?php
/**
 * Created by PhpStorm.
 * User: alaa
 * Date: 3/10/19
 * Time: 10:50 AM
 */

class Books
{
    public function name(){
        echo "Drupal book";
  }
    public function price(){
        echo "900 Rs";
  }
}


$obj = new Books();
$obj->name();
$obj->price();