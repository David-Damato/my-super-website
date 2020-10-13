<?php

require_once 'Bicycle.php';
$bike = new Bicycle();
var_dump ($bike);
echo '<br>'.'<br>';

$bike->color = "blue";
$bike->currentSpeed = 0;
var_dump($bike);
echo '<br>'.'<br>';

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>'.'<br>';

require_once 'Car.php';
$car = new Car('blue', 5, 'essence');

// Moving car
// Brake / Forward
$car->setCurrentSpeed(10);
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>'.'<br>';

// Start car
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

