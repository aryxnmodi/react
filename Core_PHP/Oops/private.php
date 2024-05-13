<?php

// Define the base class

class Jewellery {

    private $price = "We have a fixed price of 100000";

    private function show()

    {

        echo "This is a private method of a base class";

    }

}

//  define the derived classes

class Necklace extends Jewellery {

    function printPrice()

    {

        echo $this->price;

    }

}

// create the object of the

// derived class

$obj= new Necklace;

// this line is trying to 

// call a private method.

// this will throw error

$obj->show();

// this will also throw error

$obj->printPrice();

?>