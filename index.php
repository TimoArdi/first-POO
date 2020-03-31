<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle(bleue,15);
$mustang = new Car(noire,2,Essence);
$bmw = new Car(blanche,5,Electrique);
$bmw->setCurrentSpeed(0);
$bmw->setEnergyLevel(Low);
// Moving bike
echo $bike->getColor();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> La vitesse de la voiture ' . $bmw->getColor() . ' est de ' . $bmw->getCurrentSpeed() . '<br>';
echo $bmw->startCar();
echo $bmw->forward();
$bmw->setCurrentSpeed(80);
echo '<br> La vitesse de la voiture ' . $bmw->getColor() . ' est de ' . $bmw->getCurrentSpeed() . '<br>';
echo $bmw->startCar();
echo $bmw->brake();
echo '<br> La vitesse de la voiture ' . $bmw->getColor() . ' est de ' . $bmw->getCurrentSpeed() . '<br>';
echo 'La voiture ' . $mustang->getColor() . ' est une voiture avec seulement ' . $mustang->getnbSeats() . ' sieges. <br>';