<?php
    require_once 'class_kendaraan.php';

    $motor = new motor("Motor","Bensin",2);
    $submarine = new Submarine("Kapal Selam","Biogas",700);


    echo "Info Motor:<br>";
    $motor->getInfo();
    echo "<br><br>";
    echo "Info Kapal Sekam:<br>";
    $submarine->getInfo();

?>