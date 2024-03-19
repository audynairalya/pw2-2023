<?php

    class Car {
        // hak akses (access modifier) : public, private, protected
        public $brand;
        public $color;

        // method
        function getBrand() {
            return $this -> brand;
        }
        function getColor() {
            return $this -> color;
        }
    }

    // object
    $tesla = new Car();
    $audi = new Car();
    
    // set value / setter
    $tesla -> brand = 'Tesla';
    $audi -> brand = 'Audi';
    $tesla -> color = ' Pink';
    $audi -> color = ' Blue';

    // echo
    echo $tesla -> getBrand();
    echo $tesla -> getColor();
    echo '<br>';
    echo $audi -> getBrand();
    echo $audi -> getColor();

?>