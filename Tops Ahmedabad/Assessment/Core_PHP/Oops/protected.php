<?php

// Define the base class

class Jewellery {

    protected $price1 = 10000;

    protected $price2 = 20000;           

    // Subtraction Function

    function total()

    {

        echo $sum = $this->price1 + $this->price2;

        echo PHP_EOL;

    }   

}

 

// define the derived classes 

class Necklace extends Jewellery {

    function printInvoice() 

    {

        $tax = 100;

        echo $sub = $this->price1 + $this->price2 + $tax;

        echo PHP_EOL;

    }

}

$obj= new Necklace;

$obj->total();

$obj->printInvoice();

?>