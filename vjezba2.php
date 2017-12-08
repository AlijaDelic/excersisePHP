<?php
$car_consumption	= $_GET['c'];//in link enter ?c= value
$car_fuel			= $_GET['f'];//in link enter &f= value
$car_distance		= $_GET['d'];//in link enter &d= value
define("DISTANCE","km");
define("VOLUME","L");
define("CONSUMPTION_UNIT",100);

$car_fuel_to_consume=$car_consumption*$car_distance/CONSUMPTION_UNIT;
$car_distance_to_go=(($car_fuel*CONSUMPTION_UNIT/$car_consumption)-$car_distance);
if ($car_fuel_to_consume<= $car_fuel) {
    echo "There is enougph fuel!" , "<br>";
    echo "You will consume:";
    echo $car_fuel_to_consume." " .VOLUME.".";
    echo "<br>";
    echo "With Your fuel You can go  " .number_format( $car_distance_to_go,2) . DISTANCE." more!";
}
else{
    echo "There is not enougph fuel";
}
