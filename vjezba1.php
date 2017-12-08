<?php
$car_position_x =   0;
$finish_point   =   4;

$car_position_x++;
if ($car_position_x>=$finish_point){
    echo "Car ended a race";
}
else{
    echo "Car is still in a race!";
}