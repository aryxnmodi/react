<?php

 // Define the base class

class Jewellery {

    public $price = "We have a fixed price of 100000";

    function printMessage() {

        echo $this->price;

        echo PHP_EOL;

    }

}

 //  define the derived classes

class Necklace extends Jewellery {

    function print(){

        echo $this->price;

        echo PHP_EOL;

    }

}

// create the object of the

// derived class.

$obj= new Necklace;

 // call the functions

echo $obj->price;

echo PHP_EOL;

 $obj->printMessage();

 $obj->print();

?>