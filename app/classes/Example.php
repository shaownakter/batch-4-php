<?php

namespace  App\classes;
class Example
{
    public $firstNumber=10;
   public $firstName;
   public $lastName;

public function index()
{
   /* echo "hello world";*/
    $this->firstName = "Shaown";
    $this->lastName = "Akter";
    echo $this->firstNumber;
    echo '<br/>';
    echo $this->firstName;
    echo '<br/>';
    echo $this->lastName;
    echo '<br/>';
    echo $this->firstName.' &nbsp'.$this->lastName;

    /*echo $this->firstNumber;*/

}
}
