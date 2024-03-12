<?php
$fruits = ["Mango", "Banana", "Strawberry", "Durian"];
    // Default
    // Associative Array
    // Multidimensional Array

        // var_dump ($fruits);
        // echo '<br>';
        // print_r ($fruits);
        // echo '<br';
        // foreach ($fruits as $fruit) {
        //     echo '<br>';
        //     echo '<br>';
        //     echo $fruit;
        //     echo '<br>';
        // }

        $dinos = [
            [
                'dinoName' => 'Rex',
                'dinoAge' => 500
            ],
            [
                'dinoName' => 'Bracio',
                'dinoAge' => 800
            ],
            [
                'dinoName' => 'Ptena',
                'dinoAge' => 250
            ]
        ];

        foreach ($dinos as $dino) {
            echo $dino['dinoName'];
            echo $dino['dinoAge'];
            echo '<br>';
        }
?>