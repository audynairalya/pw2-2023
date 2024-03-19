<?php
    require_once "class_balok.php";

    $balok1 = new balok(31, 17, 9);
    $balok2 = new balok(5, 13, 6);
    $balok3 = new balok(4, 18, 2);
    $balok4 = new balok(20, 10, 7);

    echo "Luas Balok 1 = " . $balok1 -> getLuas() . "cm" . "<br>";
    echo "Keliling Balok 1 = " . $balok1 -> getKeliling() . "cm" . "<br>";
    echo "Volume Balok 1 = " . $balok1 -> getVolume() . "cm" . "<br><br>";

    echo "Luas Balok 2 = " . $balok2 -> getLuas() . "cm" . "<br>";
    echo "Keliling Balok 2 = " . $balok2 -> getKeliling() . "cm" . "<br>";
    echo "Volume Balok 2 = " . $balok2 -> getVolume() . "cm" . "<br><br>";

    echo "Luas Balok 3 = " . $balok3 -> getLuas() . "cm" . "<br>";
    echo "Keliling Balok 3 = " . $balok3 -> getKeliling() . "cm" . "<br>";
    echo "Volume Balok 3 = " . $balok3 -> getVolume() . "cm" . "<br><br>";

    echo "Luas Balok 4 = " . $balok4 -> getLuas() . "cm" . "<br>";
    echo "Keliling Balok 4 = " . $balok4 -> getKeliling() . "cm" . "<br>";
    echo "Volume Balok 4 = " . $balok4 -> getVolume() . "cm" . "<br>";
?>