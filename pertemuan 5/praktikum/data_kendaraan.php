<?php

    require_once 'class_kendaraan.php';

    $motor = new motor('Motor', 'Bensin', 2);
    $submarine = new submarine('Submarine', 'Solar', 1000);

    echo "Info motor :<br>";
    $motor -> getInfoMotor();
    echo "<br>";

    echo "Info submarine :<br>";
    $submarine -> getInfoSubmarine();

?>