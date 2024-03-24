<?php

    require_once 'class_kasus.php';

    $hotel = new hotel('Margo Hotel', 'Superior', 350000);
    $roomType = new roomType('Dafam Yogyakarta', 'Junior', 270000, 4);
    $price = new price('Kempinski Bali', 'Deluxe', 500000);

    echo "Hotel In Depok :<br>";
    $hotel -> getInfoHotel();
    echo "<br>";

    echo "Hotel In DIY :<br>";
    $roomType -> getInfoType();
    echo "<br>";

    echo "Hotel In Bali :<br>";
    $price -> getInfoPrice();

?>